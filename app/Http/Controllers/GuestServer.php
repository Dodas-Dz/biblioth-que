<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestServer extends Controller
{
    public function Home()
    {
        return view('user/index');
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

}
