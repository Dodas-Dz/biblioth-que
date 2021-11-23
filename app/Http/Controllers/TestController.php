<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\LivreImport;
use Maatwebsite\Excel\Facades\Excel;

class TestController extends Controller
{
    public function view()
    {
        return view('myform');
    }
    public function import()
    {
        Excel::import(new LivreImport,request()->file('xls'));
        return redirect()->back();
    }
}
