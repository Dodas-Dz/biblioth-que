<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function liste()
    {
        return view('/admin/liste');
    }
    public function statistic()
    {
        return view('/admin/statistic');
    }
    public function profileadmin()
    {
        return view('/admin/profileadmin');
    }
    public function listelivre()
    {
        return view('/admin/listelivre');
    }
    public function AjouterMot(){
        return view('/admin/AjouterMot');

    }
    public function categorie(){
        return view('/admin/categorie');

    }
    public function notification(){
        return view('/admin/notification');

    }
    public function message(){
        return view('/admin/message');

    }
}
