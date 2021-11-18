<?php

namespace App\Http\Controllers;

use App\Models\Abonne;
use Illuminate\Http\Request;

class AbonneController extends Controller
{
   
    public function abonne() 
    {
        $abonnes= Abonne::all();                 
        return view('admin.liste',compact('abonnes'));
    }
    protected function create(Request $request)
    {   
      dd($request);
  
    }

    public function getUser()
    {
        $users= User::all();                    
        return view('admin.listeuser',compact('users'));
    }
   
}
