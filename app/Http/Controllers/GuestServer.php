<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestServer extends Controller
{
    public function Home()
    {
        redirect('/');
    }
    
    public function Recherche()
    {
        return view('user/recherche');
    }
    public function Emprente()
    {
        return view('user/Emprente');
    }
    public function Apropos()
    {
        return view ('user/Apropos');
    }
    public function pasword()
    {
        return view ('auth/passwords/confirm');
    }

}
