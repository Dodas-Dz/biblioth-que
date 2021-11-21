<?php

namespace App\Http\Controllers;
use App\Helpers\Helper;
use App\Models\Abonne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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
            'name'=> ['required', 'string', 'max:255'],
            'prenom'=> ['required', 'string', 'max:255'],
            'date'=>['required'],
            ]);
        $student_id = Helper::IDGenerator(new Abonne, 'student_id', 8, 'STD'); 
         Abonne::create([
                'name' => $request->input('name'),
                'prenom' => $request->input('prenom'),
                'date_naissance' => $request->input('date'),
                'student_id' =>$student_id 
                
        ]); 
        return redirect()->route('liste');
    }

  
   
}
