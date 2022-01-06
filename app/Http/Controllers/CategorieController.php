<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Livre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB ;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
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
            'name'=> ['required', 'string', 'max:255'],


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
        Categorie::create([
            'name' => $request->input('name'),

          ]);
        return redirect()->route('categorie');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie $categorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */

    public function getCategories()
    {
        $categories =   DB::select(DB::raw("SELECT COUNT(titre) AS livres_titre,categories.name,category_id
        FROM livres
        LEFT JOIN  categories ON categories.id = livres.category_id
        GROUP BY livres.category_id"));


        return view('admin.categorie',compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $categorie= Categorie::findOrFail($id);

        return view('admin.categorie',compact('categorie'));
    }
    public function update(Request $request, $id)
    {
        //
        $categorie= Categorie::findOrFail($id);

        $categorie -> name= $request->input('name');


        $categorie->update();

        return redirect()->route('categorie')->with('success', 'Livre mis à jour avec succèss');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $categories = Categorie::find($id)->delete();

        return back();
    }
}
