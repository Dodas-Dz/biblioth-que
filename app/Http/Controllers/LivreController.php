<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Mot;
use Illuminate\Support\Facades\Validator;
use DB ;

class LivreController extends Controller
{

    public function livres()
    {

        $livresfiltre= Livre::orderBy('anneé', 'DESC')->paginate(20);
        $categories =Categorie::all();
        $mot =Mot::all();


        return view('admin.listelivre',compact('categories','mot','livresfiltre'));
    }

    public function search_admin(Request $request)
    {    $request->validate([
        'q'=>'required|min:2'
     ]);

     $categories =Categorie::all();
     $mot =Mot::all();
     $search_text = $request->input('q');
     $livresfiltre= Livre::where('titre','LIKE','%'.$search_text.'%')
                ->orwhere('isbn','LIKE','%'.$search_text)
                ->paginate(15);
                return view('admin.listelivre',compact('categories','mot','livresfiltre'));

    }

    public function livress()
    {
        $livres= Livre::paginate(16);
        $categories =Categorie::all();
        $mot =Mot::all();
        return view('user.recherche',compact('livres','mot','categories'));
    }


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
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/livre'), $imageName);

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
                'image'=> $imageName ?? null ,

              ]);



            return redirect()->route('listelivre');

    }

    public function edit($id)
{
    $livresfiltre= Livre::findOrFail($id);
    $categories =Categorie::all();

    return view('admin.listelivre',compact('categories','livresfiltre'));


}

public function update(Request $request, $id)
{

    $livres = Livre::findOrFail($id);

    $livres-> titre = $request->input('name');
    $livres -> isbn = $request->input('isbn');
    $livres -> auteur = $request->input('nom_auteur');
    $livres -> anneé = $request->input('date');
    $livres -> category_id= $request->input('categories');
    $livres -> resumer = $request->input('description');
    $livres -> nbr= $request->input('nbr');
    $livres -> langue= $request->input('langue');

      $livres->update();

    return redirect()->route('listelivre')->with('success', 'Livre mis à jour avec succèss');
}


    public function deleteLivre($id)
    {
        $livres = Livre::find($id)->delete();

        return back();
    }

    public function search(Request $request)
    {

        /*  */
         $categories =Categorie::all();
         $mot =Mot::all();
         $search_text = $request->input('q');
         $search_categorie = $request->input('inputCategories');
         $livres = Livre:: where([['titre','LIKE','%'.$search_text.'%'],['category_id','=',$search_categorie]])
                    ->orwhere('isbn','=',$search_text)
                    ->paginate(16);
        return view('user.recherche',compact('livres','mot','categories'));


    }





}
