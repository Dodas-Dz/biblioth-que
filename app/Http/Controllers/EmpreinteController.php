<?php

namespace App\Http\Controllers;

use App\Models\Empreinte;
use App\Models\Abonne;
use App\Models\Livre;
use Illuminate\Http\Request;
use Carbon\Carbon;

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
    public function show()
    {

        $empreinte=Empreinte::all();
        $livre=Livre::all();
        $abonne=Abonne::all();


       return view('admin.listeemprente',compact('empreinte','livre','abonne'));
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
            $date=Carbon::now()->toDateTimeString();


             if ($ab = Abonne::where('student_id',$Abonne_code)->first())
              {
                if ($livre = Livre::where('isbn',$Livre_code)->first())
                {   $abonne = Abonne::where('student_id',$Abonne_code)->get();
                    Empreinte::create([
                        'livre_id' => $livre->id,
                        'abonne_id' => $ab->id,
                        'date_fin'=>date('Y-m-d', strtotime($date. ' + 15 days'))
                      ]);
                      $livre->nbr = $livre->nbr-1;
                      $livre->save();
                      $request->session()->flash('succe','vous avez bien empreinte le livre');
                      return redirect()->route('emprunter');
                }
                else{
                    $request->session()->flash('echec','erreur Isbn Livre dont exist');
                    return redirect()->route('emprunter');
                }
              }
            else
            {
                $request->session()->flash('echec','erreur Abonne dont exist');
                return redirect()->route('emprunter');

            }
    }
    public function RendreLivre(Request $request)
    {
        $Abonne_code=$request->input('code_abonne');
        $Livre_code=$request->input('code_livre');
        $ab = Abonne::where('student_id',$Abonne_code)->first();
        $livre = Livre::where('isbn',$Livre_code)->first();
     if($c=Empreinte::where([['livre_id',$livre->id],['abonne_id','=',$ab->id],['rendu','=','0']])->first())
     {
        $c->rendu=1;
        $c->save();
        $livre->nbr = $livre->nbr+1;
        $livre->save();
        $request->session()->flash('succe','le livre a bien été rendu');
        return redirect()->route('rendre');

     }
     else
     {
        $request->session()->flash('echec','emprente introvabre ou le livre est deja rendu');
        return redirect()->route('rendre');
     }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empreinte  $empreinte
     * @return \Illuminate\Http\Response
     */


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
