<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Abonne;
use App\Helpers\Helper;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use App\Notifications\AbonneMail;
use Illuminate\Support\Facades\Validator;
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
#fonction modifier

    public function update(Request $request){
        
  $abonnes = Abonne::find($request->$id);
  
  $abonnes->name=$request->name;
  $abonnes->prenom=$request->prenom;
  $abonnes->mail=$request->mail;
  $abonnes->date_naissance=$request->date_naissance;
  $abonnes->image=$request->image;

   $abonnes->create();

  return redirect()->route('listelivre');
}

   

    public function getPostPdf($id)
    {
        $abonnes = Abonne::find($id);
        
     $customPaper = array(0,0,198.42,368.50);

       $pdf = \PDF::loadView('admin.pdf', compact('abonnes'))->setPaper($customPaper,'landscape');;
    

      return $pdf->stream('abonne.pdf');
    }


    public function deleteAbonne($id)
    {
        $abonnes = Abonne::find($id);
        $abonnes->delete();
        return back();
    }
   
}
