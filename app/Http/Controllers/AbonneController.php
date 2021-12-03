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
   

    public function getPostPdf($id)
    {
        $abonnes = Abonne::find($id);
        
       $pdf = PDF::loadView('admin.pdf', compact('abonnes'))->setPaper('A6', 'landscape');
    

      return $pdf->stream('abonne.pdf');
    }


    public function deleteAbonne($id)
    {
        $abonnes = Abonne::find($id);
        $abonnes->delete();
        return back();
    }
   
}
