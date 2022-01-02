<?php

namespace App\Http\Controllers;

use App\Models\Empreinte;
use App\Models\Abonne;
use App\Models\Livre;
use Illuminate\Http\Request;

class EmpreinteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *if (User::where('email', '=', Input::get('email'))->exists()) {
   

     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function EmprenterLivre(Request $request)
    {
      
        
            $Abonne_code=$request->input('code_abonne');
            $Livre_code=$request->input('code_livre');

      
             if ($ab = Abonne::where('student_id',$Abonne_code)->first())
              { 
                if ($livre = Livre::where('isbn',$Livre_code)->first())
                {   $abonne = Abonne::where('student_id',$Abonne_code)->get();
                    Empreinte::create([
                        'livre_id' => $livre->id,
                        'abonne_id' => $ab->id
                      ]); 
                      $livre->nbr = $livre->nbr-1;
                      $livre->save();
                    return redirect()->route('emprunter');
                }
                else{
                    echo "erreur Isbn Livre dont exist" ;
                }
              }
            else
            {
                echo "erreur Abonne dont exist" ;
    
            }
    }
    public function RendreLivre(Request $request)
    {
        $Abonne_code=$request->input('code_abonne');
        $Livre_code=$request->input('code_livre');
        $ab = Abonne::where('student_id',$Abonne_code)->first();
        $livre = Livre::where('isbn',$Livre_code)->first();
     if($c=Empreinte::where([['livre_id',$livre->id],['abonne_id','=',$ab->id],['rendu','=','0']]))
     {
        $c->rendu=1;
        $c->save();
        $livre->nbr = $livre->nbr+1;
        $livre->save();
        return redirect()->route('emprunter');
     }
     else
     {
         echo("emprente introvabre ou le livre est deja rendu");
     }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empreinte  $empreinte
     * @return \Illuminate\Http\Response
     */
    public function show(Empreinte $empreinte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empreinte  $empreinte
     * @return \Illuminate\Http\Response
     */
    public function edit(Empreinte $empreinte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empreinte  $empreinte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empreinte $empreinte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empreinte  $empreinte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empreinte $empreinte)
    {
        //
    }
}
