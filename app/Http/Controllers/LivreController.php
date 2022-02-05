<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Mot;
use App\Models\Abonne;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\LivreMail;
use DB ;

class LivreController extends Controller
{

    public function livres()
    {

        $livresfiltre= Livre::orderBy('anneé', 'DESC')->paginate(20);
        $categories =Categorie::all();
        $mot =DB::select(DB::raw(" SELECT mot_cle FROM mots"));
       
        return view('admin.listelivre',compact('categories','mot','livresfiltre'));
    }

    public function search_admin(Request $request)
    {    $request->validate([
        'q'=>'required|min:2'
     ]);

     $categories =Categorie::all();
     $mot =Mot::all();
     $search_text = $request->input('q');
     $livresfiltre= Livre::search($search_text)
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

    public function livrehome()
    {
        $livres= DB::select(DB::raw("SELECT * FROM livres LIMIT 4;"));
        $categories =Categorie::all();
        $mot =Mot::all();
        return view('user.index',compact('livres','mot','categories'));
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
           
           $livre= Livre::create([
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

          $abonnes=Abonne::all();

          foreach ($abonnes as $abonne) {

              $data = array(
                'from' => env('MAIL_FROM_ADDRESS'),
                'to' => $abonne->mail,
                'subject' => 'Nouveaux Livres chez Maktaba',
                'name' => $abonne->name,
                'prenom' => $abonne->prenom,
                'std' => $abonne->student_id,
                'titre' => $livre->titre,
              );
             // dd($data);
              Mail::to($data['to'])
                                  ->send(new LivreMail($data));

            }
            $request->session()->flash('succe','livre ajouter avec succés');
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
      $request->session()->flash('succe','livre modifier avec succés');
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
         $livres =  Livre::search($search_text)->where('category_id','=',$search_categorie)
         ->paginate(15);
        return view('user.recherche',compact('livres','mot','categories'));


    }





}
