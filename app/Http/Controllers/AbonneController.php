<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Abonne;
use App\Models\Empreinte;
use App\Helpers\Helper;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use App\Notifications\abonneNotification;  
use App\Http\Requests\CreateSubscriberRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\AbonneMail;


use DB;
Use Notifiable;
class AbonneController extends Controller
{

public $pdf;    

    public function abonne() 
    {

        $abonnes= Abonne::orderBy('created_at', 'DESC')->paginate(10);  
        
        $emprent_nbr=DB::select(DB::raw(" SELECT  abonne_id AS id, 
        COUNT(CASE WHEN rendu = 0 THEN 1 END ) AS nbr_livre_empreinter,
        COUNT(CASE WHEN rendu = 1 THEN 1 END ) AS nbr_livre_rendu
        FROM empreintes
        GROUP BY abonne_id; "));

    
        return view('admin.liste',compact('abonnes','emprent_nbr'));
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
        
        
        //$mail=$abonne->mail;
           
          //  dd($mail);
          $data = array(
            'from' => env('MAIL_FROM_ADDRESS'),
            'to' => $abonne->mail,
            'subject' => 'Bienvenue sur Maktaba',
            'name' => $abonne->name,
            'prenom' => $abonne->prenom,
            'std' => $abonne->student_id,
          );
         // dd($data);
          Mail::to($data['to'])
                              ->send(new AbonneMail($data));
    
        
    //  Mail::to('$mail')->send(new AbonneMail()); 


      $abonne->notify(new abonneNotification());

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
        
     $customPaper = array(0,0,215.42,368.50);

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
