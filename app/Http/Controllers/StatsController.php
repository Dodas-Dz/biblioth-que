<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Abonne;

class StatsController extends Controller
{
    public function lineChart(){


        return view('layouts.linechart');

    }
    public function pieChart(){


        return view('layouts.piechart');

    }
    public function barChart(){


        return view('layouts.barchart');

    }
    //
}
