<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Abonne;
use App\Models\Categorie;
use App\Models\Livre;

usE DB;
class StatsController extends Controller
{
    public function lineChart(){


        return view('layouts.linechart');

    }
    public function pieChart(){

         $result= DB::select(DB::raw("SELECT COUNT(titre) AS livres_titre,categories.name 
         FROM livres 
         LEFT JOIN  categories ON categories.id = livres.category_id 
         GROUP BY livres.category_id"));
        
        $data="";

        foreach($result as $val)
        {
            $data=" ['.$val->name'  ,    '.$val->livres_titre'],";

            dd($data);
        }
          

          $chartData=$data;

         

        return view('layouts.piechart' )->with('chartData');

    }
    public function barChart(){


        return view('layouts.barchart');

    }
    //

    public function pie()
   {
    $livre =Livre::all(); 
    $categories =Categorie::all(); 

    return view('layouts.piechart', compact('livre', 'categorie'));

   }
}
