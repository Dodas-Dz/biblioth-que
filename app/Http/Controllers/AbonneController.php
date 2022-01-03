<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Abonne;
use App\Helpers\Helper;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use App\Notifications\AbonneMail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use App\Notifications\abonneNotification;  
use App\Http\Requests\CreateSubscriberRequest;



Use Notifiable;
class AbonneController extends Controller
{

public $pdf;    

    public function abonne() 
    {
        $abonnes= Abonne::orderBy('created_at', 'DESC')->paginate(10);              
        return view('admin.liste',compact('abonnes'));
    }

  
    public function create(CreateSubscriberRequest $request)
    {   
        
        if($request->hasFile('image'))
        {
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/abonnes'), $imageName);

        }
        $validatedData = $request->validated();
        $validatedData['image'] = $imageName ?? null; 

        $abonne = Abonne::create(
            $validatedData
        ); 
        
      $abonne->notify(new AbonneMail());

       $users = User::all();
        $abone = $abonne->name;

        foreach ($users as $user) {

            $user->notify(new abonneNotification($abone)); 
            # code...
        }
     


        return redirect()->route('liste');

    }

   

    public function getPostPdf($id)
    {
        $abonnes = Abonne::find($id);
        
     $customPaper = array(0,0,198.42,368.50);

       $pdf = \PDF::loadView('admin.pdf', compact('abonnes'))->setPaper($customPaper,'landscape');;
    

      return $pdf->stream('abonne.pdf');
    }

    public function edit($id)
    {
        $abonnes= Abonne::findOrFail($id);  
    
        return view('admin.liste',compact('abonnes'));
       
       
    }
    
    public function update(Request $request, $id)
    { 
       
        $abonnes= Abonne::findOrFail($id);  
    
        $abonnes -> mail= $request->input('mail');
        $abonnes-> name = $request->input('name');
        $abonnes -> prenom = $request->input('prenom');
        $abonnes -> date_naissance = $request->input('date_naissance');

        if($request->hasFile('image'))
        { 
            $destination = public_path('/abonnes').$abonnes -> image;

            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/abonnes'), $imageName);
            $abonnes -> image = $imageName;
        }
        
       
        $abonnes->update();
    
        return redirect()->route('liste')->with('success', 'Livre mis à jour avec succèss');
    }

    public function deleteAbonne($id)
    {
        $abonnes = Abonne::find($id);
        $abonnes->delete();
        return back();
    }
   
}
