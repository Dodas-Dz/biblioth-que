<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;
use App\Models\Categorie;
use Illuminate\Support\Facades\Validator;

class LivreController extends Controller
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
    public function livres() 
    {
        $livres= Livre::with('categorie')->get();     
        $categories =Categorie::all();            
        return view('admin.listelivre',compact('livres','categories'));
    }

    public function livress() 
    {
        $livres= Livre::paginate(16);     
        $categories =Categorie::all();            
        return view('user.recherche',compact('livres','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function AjouterL(Request $request)
    {
        $request->validate([
            'name'=> ['required', 'string', 'max:255'],
            'isbn'=> ['required'],
            'nbr'=> ['required'],
            'image'=>['required'],
            'nom_auteur'=> ['required'],
            'date' => ['required'],
            'categories'=> ['required'],
            'description' => ['required'],
            ]);
            if($request->hasFile('image'))
            {
                $image=$request->file('image');
                $image_name = $image->getClientOriginalName();
              
                $path='public/image/abonne';
                $filename= time(). $image_name;
                $request->file('image')->storeAs($path,$filename);
    
            }
            Livre::create([
                'titre' => $request->input('name'),
                'isbn' => $request->input('isbn'),
                'auteur' => $request->input('nom_auteur'),
                'anneé' => $request->input('date'),
                'category_id'=>$request->input('categories'),
                'resumer' =>$request->input('description'),
                'nbr'=> $request->input('nbr'),
                'langue'=>$request->input('langue'),
                'image'=> $path .'/' .$filename ,
              ]); 
            return redirect()->route('listelivre');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Livre  $livre
     * @return \Illuminate\Http\Response
     */
    public function show(Livre $livre)
    {
     
    
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Livre  $livre
     * @return \Illuminate\Http\Response
     */
    public function edit(Livre $livre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Livre  $livre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Livre $livre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Livre  $livre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Livre $livre)
    {
        //
    }
}
