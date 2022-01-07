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
        return redirect()->route('listeuser');
  
    }
    public function edit($id)
    {
        $users= User::findOrFail($id);  

        
        return view('admin.listeuser',compact('users'));
       
       
    }
    
    public function update(Request $request, $id)
    { 
       
        $users= User::findOrFail($id);  
    
        $users -> name= $request->input('name');
        $users-> prenom = $request->input('prenom');
        $users -> email = $request->input('email');

        $users->update();
    
        return redirect()->route('listeuser')->with('success', 'Employe est mis à jour avec succèss');
    }

    public function getUser()
    {
        $users= User::all();                    
        return view('admin.listeuser',compact('users'));
    }

    public function delete($id)
    {
        $users = User::find($id);
        $users->delete();
        return back();
    }
   
}
