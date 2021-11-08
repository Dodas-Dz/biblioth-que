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
}
