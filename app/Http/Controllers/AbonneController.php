<?php

namespace App\Http\Controllers;
use App\Models\Abonne;
use App\Models\User;
use App\Helpers\Helper;
use Illuminate\Http\Request;
use App\Notifications\abonneNotification;        
use Illuminate\Support\Facades\Validator;

Use Notifiable;

class AbonneController extends Controller
{

    

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
          
            $path='public/image/abonne';
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


        //event(new Create($user));

        $users = User::all();

    
        $abone = $abonne->name;
        $abone_prenom= $abonne->prenom; 

      

        foreach ($users as $user) {

            $user->notify(new abonneNotification($abone, $abone_prenom)); 
            # code...
        }
     


        return redirect()->route('liste');

        

       
    }

    public function deleteAbonne($id)
    {
        $abonnes = Livre::find($id);
        $abonnes->delete();
        return back();
    }
   
}
