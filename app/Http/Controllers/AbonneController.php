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

Use Notifiable;
class AbonneController extends Controller
{

public $pdf;    

    public function abonne() 
    {
        $abonnes= Abonne::all();                 
        return view('admin.liste',compact('abonnes'));
    }

  
    public function create(Request $request)
    {   
        
        $request->validate([
            'mail'=> ['required', 'string', 'max:255'],
            'name'=> ['required', 'string', 'max:255'],
            'prenom'=> ['required', 'string', 'max:255'],
            'date'=>['required'],
            'image' => ['required']
            ]);
        if($request->hasFile('image'))
        {
       
            $image=$request->file('image');
            $image_name = $image->getClientOriginalName();
          
            $path='public/image';
            $filename= time(). $image_name;
            $request->file('image')->storeAs($path,$filename);

        }
        $student_id = Helper::IDGenerator(new Abonne, 'student_id', 8, 'STD'); 

        $abonne = Abonne::create([
                'mail' => $request->input('mail'),
                'name' => $request->input('name'),
                'prenom' => $request->input('prenom'),
                'date_naissance' => $request->input('date'),
                'student_id' =>$student_id ,
                'image'=> $path .'/'.$student_id .$filename ,
                
        ]); 

        
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
        
       $pdf = \PDF::loadView('admin.pdf', compact('abonnes'))->setOptions(['defaultFont' => 'sans-serif',
                                                                           "defaultPaperSize" => "a8"]);;

      return $pdf->download('abonne.pdf');
    }


    public function deleteAbonne($id)
    {
        $abonnes = Abonne::find($id);
        $abonnes->delete();
        return back();
    }
   
}
