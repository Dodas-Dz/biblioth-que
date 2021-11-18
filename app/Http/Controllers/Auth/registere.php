<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class registere extends Controller
{
  protected function create(Request $request)
    {   
      $request->validate([
        'name'=> ['required', 'string', 'max:255'],
        'prenom'=> ['required', 'string', 'max:255'],
        'email'=>['required', 'string', 'email', 'max:255', 'unique:users'],
        'password'=>['required', 'string', 'min:8', 'confirmed'],
        ]);
        User::create([
          'name' => $request->input('name'),
          'prenom' => $request->input('prenom'),
          'email' => $request->input('email'),
          'password' => Hash::make($request->input('password')),
        ]); 
        return redirect()->route('liste');
  
    }

    public function getUser()
    {
        $users= User::all();                    
        return view('admin.listeuser',compact('users'));
    }
}
