<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;
use App\Models\Categorie;
use Illuminate\Support\Facades\Validator;
use DB ;

class LivreController extends Controller
{
    
    public function livres() 
    {
        
        $livresfiltre= Livre::paginate(20);    
        $categories =Categorie::all();            
        return view('admin.listelivre',compact('categories','livresfiltre'));
    }
    public function search_admin(Request $request)
    {    $request->validate([
        'q'=>'required|min:2'
     ]);

     $categories =Categorie::all(); 
     
     $search_text = $request->input('q');
     $livresfiltre= Livre::where('titre','LIKE','%'.$search_text.'%')
                ->orwhere('isbn','LIKE','%'.$search_text)
                ->paginate(15);
                return view('admin.listelivre',compact('categories','livresfiltre'));

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

    public function search(Request $request)
    {   
       
        /*  */
         $categories =Categorie::all(); 
         $search_text = $request->input('q');
         $search_categorie = $request->input('inputCategories');
         $livres = Livre:: where('titre','LIKE','%'.$search_text.'%')
                    ->where('category_id','=',$search_categorie)
                    ->orwhere('isbn','=',$search_text)
                    ->paginate(16);
        return view('user.recherche',compact('livres','categories'));
               
       
    }
   

  
}
