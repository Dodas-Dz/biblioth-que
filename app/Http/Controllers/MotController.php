<?php

namespace App\Http\Controllers;

use App\Models\Mot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB ;

class MotController extends Controller
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
        $request->validate([
            'mot_cle'=> ['required', 'string', 'max:255'],
     
           
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        //
        Mot::create([
             'mot_cle' => $request->input('mot_cle'),
             'nbr_livre' => DB::table('livres')->orderBy('mot_id')->count(),
        ]);

        return redirect()->route('AjouterMot');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mot  $mot
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $mots = Mot::all();                 
        return view('admin.AjouterMot',compact('mots'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mot  $mot
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $mot= Mot::findOrFail($id);  
    
        return view('admin.AjouterMot',compact('mot'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mot  $mot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $mot= Mot::findOrFail($id);  
    
        $mot -> mot_cle= $request->input('mot_cle');
       

        $mot->update();
    
        return redirect()->route('AjouterMot')->with('success', 'Livre mis à jour avec succèss');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mot  $mot
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $mots = Mot::find($id)->delete();

        return back();
    }
}
