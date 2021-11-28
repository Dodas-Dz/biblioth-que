<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;
use App\Models\Categorie;
use Illuminate\Support\Facades\Validator;

class LivreController extends Controller
{
  
    public function livres() 
    {
        $livres= Livre::with('categorie')->get(); 
        $livresfiltre= Livre::paginate(20);    
        $categories =Categorie::all();            
        return view('admin.listelivre',compact('livres','categories','livresfiltre'));
    }

    public function livress() 
    {
        $livres= Livre::paginate(16);     
        $categories =Categorie::all();            
        return view('user.recherche',compact('livres','categories'));
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
    public function deleteLivre($id)
    {
        $livres = Livre::find($id);
        $livres->delete();
        return back();
    }
   
    

  
}
