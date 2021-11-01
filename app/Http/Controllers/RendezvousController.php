<?php

namespace App\Http\Controllers;

use App\Models\rendezvous;
use Illuminate\Http\Request;

class RendezvousController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/web/rendezvous/rendez-vous');
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
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $request->validate([
            'id_commande'=>'required',
            'pseudo'=>'required',
            'date'=>'required',
            'heure'=>'required',
    
        ]);
            
            $rendezvous =new RendezVous;
            $rendezvous->contact_pseudo='pseudo';
            $rendezvous->date=$request->input('date');
            $rendezvous->heurs=$request->input('heure');
            $rendezvous->commande_id=$request->input('id_commande');
            $rendezvous->save();
            return redirect()->route('paiment');

          
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rendezvous  $rendezvous
     * @return \Illuminate\Http\Response
     */
    public function show(rendezvous $rendezvous)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rendezvous  $rendezvous
     * @return \Illuminate\Http\Response
     */
    public function edit(rendezvous $rendezvous)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\rendezvous  $rendezvous
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rendezvous $rendezvous)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rendezvous  $rendezvous
     * @return \Illuminate\Http\Response
     */
    public function destroy(rendezvous $rendezvous)
    {
        //
    }
}
