<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Abonne;
use App\Models\Categorie;
use App\Models\Livre;
use App\Models\Empreinte;
use App\Models\Message;
use App\Models\Mot;


use DB;

class StatsController extends Controller
{



    public function Chart(){


        $abonne = DB::table('abonnes')->count();
        $categorie = DB::table('categories')->count();
        $mot = DB::table('mots')->count();
        $message = DB::table('messages')->count();
        $livre = DB::table('livres')->count();
        $livre_emp = DB::table('empreintes')->count();

         $result1= DB::select(DB::raw("SELECT COUNT(titre) AS livres_titre,categories.name
         FROM livres
         LEFT JOIN  categories ON categories.id = livres.category_id
         GROUP BY livres.category_id"));


        $data1="";

        foreach($result1 as $val1)
        {
            $data1.=" ['".$val1->name."'  ,    ".$val1->livres_titre."],";

        }
          $chartData1=$data1;

//-----------------------------------

          $result2= DB::select(DB::raw("SELECT YEAR( `anneé` ) AS annee, COUNT( * ) AS nbr_livre
          FROM livres
          GROUP BY annee; "));


        $data2="";

        foreach($result2 as $val2)
        {
            $data2.=" [".$val2->annee."  ,    ".$val2->nbr_livre."],";

        }

//-----------------------------------

        $result3= DB::select(DB::raw(" SELECT MONTH(`created_at`) AS mois,
        COUNT(CASE WHEN rendu = 0 THEN 1 END ) AS nbr_livre_empreinter,
        COUNT(CASE WHEN rendu = 1 THEN 1 END ) AS nbr_livre_rendu
        FROM empreintes
        GROUP BY mois; "));


      $data3="";

      foreach($result3 as $val3)
      {
          if($val3->mois==2 )
          {
            $data3=" ['février' ,    ".$val3->nbr_livre_empreinter." ,  ".$val3->nbr_livre_rendu."],";
          }
          else
          $data3.=" ['mois'  ,    ".$val3->nbr_livre_empreinter." ,  ".$val3->nbr_livre_rendu."],";


      }



       return view('admin.statistic',compact('chartData1','data2','data3','abonne', 'categorie', 'mot', 'message', 'livre','livre_emp'));

    }

    //



}
