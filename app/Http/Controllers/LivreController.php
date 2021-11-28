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

    public function searchedBooks(){ 
        $seachedbooks=$_GET['searchcontent'];
        $replies= reply::where('titre','like','%'.$seachedbooks.'%')
        ->orwhere('isbn','like','%'.$seachedbooks.'%')
        ->orwhere('auteur','like','%'.$seachedbooks.'%')
        -orwhere('langue','like','%'.$seachedbooks.'%')
        ->get();

        $resultat='';
        foreach($replies as $reply){
            $output.='
             <tr>
                        <td>'.$reply->isbn.'</td>
                        <td>'.$reply->titre.'</td>
                        <td>'.$reply->auteur.'</td>
                        <td>'.$reply->langue.'</td>
                        <td>'.$reply->Categorie->name.'</td>
                        <td>'.$reply->anneé.'</td>
                        <td>'.$reply->nbr.'</td>
                        <td><a onclick="return delete_confirmation()" href="'.route('Livre.delete',$reply->id) .'" ><i class="fa fa-trash" ></i></a></td>
                        <td><a href="#"><i class="fa fa-edit" ></i></a></td>
                      </tr>
            ';

        }

        return $data=array(
            'resultats'=>$output



        );

    }
    

  
}
