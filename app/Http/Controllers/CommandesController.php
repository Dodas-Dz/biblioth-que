<?php

namespace App\Http\Controllers;
use App\Models\Commande;
use App\Models\User;
use App\Models\RendezVous;
use App\Models\Service;
use App\Models\Message;
use Illuminate\Http\Request;

class CommandesController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }
    public function getMyCommandes()
    {
    
        $commandes = Commande::where('user_id',Auth()->user()->id)
                                ->with('rendez_vous')
                                ->get();
                      
        return view('web.commandeuser',compact('commandes'));
    }
    public function deleteCommande($id)
    {
        $commande = Commande::find($id);
        $commande->rendez_vous->delete();
        $commande->delete();
        return back();
    }
    public function deletemessage($id)
    {
        $message = Message::find($id);
        $message->delete();
        return back();
    }
    public function toggleCommande(Request $request,$id)
    {
        $commande = Commande::find($id);
        $commande->etat = $request->etat;
        $commande->save();

        return back();
    }
    public function getCommandesAdmin()
    {
        $commandes = Commande::with('rendez_vous')
                             ->with('user')
                             ->with('service')
                             ->get();
                         
                             
        return view('web.commande_admin',compact('commandes'));
    }
    public function getmessage()
    {
        $messages= Message::all();                    
        return view('web.message',compact('messages'));
    }
    public function message(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'message'=>'required',
            ]);
            $messages =new Message;
            $messages->name=$request->input('name');
            $messages->email=$request->input('email');
            $messages->message=$request->input('message');
            $messages->save();
            return redirect()->route('home');
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
 {              $request->validate([
                    'name'=>'required',
                    'couleur1'=>'required',
                    'couleur2'=>'required',
                    'tamplate'=>'required',
                    'type'=>'required',
                    'pack'=>'required',
                    'police'=>'required',
                    'description'=>'required',

            ]);

                $commandes =new Commande;
                $commandes->name=$request->input('name');
                $commandes->couleur=$request->input('couleur1');
                $commandes->couleur1=$request->input('couleur2');
                $commandes->tamplate=$request->input('tamplate');
                $commandes->type=$request->input('type');
                $commandes->police=$request->input('police');
                $commandes->packes_id=$request->input('pack');
                $commandes->description=$request->input('description');
                $commandes->user_id=Auth()->user()->id;
                $commandes->service_id='001';
                $commandes->save();
                $commandes->id;
            
            
                return redirect()->route('rendezvous',$commandes->id);
    
    }
     public function rendez_vous(Request $request)
     {  

     }
    //protected function makeRDV(id)
    public function commandeapp(Request $request)
    {  $request->validate([
        'name'=>'required',
        'couleur1'=>'required',
        'couleur2'=>'required',
        'tamplate'=>'required',
        'type'=>'required',
        'pack'=>'required',
        'police'=>'required',
        'description'=>'required',

    ]);
        
        $commandes =new Commande;
        $commandes->name=$request->input('name');
        $commandes->couleur=$request->input('couleur1');
        $commandes->couleur1=$request->input('couleur2');
        $commandes->tamplate=$request->input('tamplate');
        $commandes->type=$request->input('type');
        $commandes->police=$request->input('police');
        $commandes->packes_id=$request->input('pack');
        $commandes->description=$request->input('description');
        $commandes->user_id=Auth()->user()->id;
        $commandes->service_id='002';
        $commandes->save();
        $commandes->id;
       
        return redirect()->route('rendezvous',$commandes->id);
    }
    public function commandedesign(Request $request)

    { 
        $request->validate([
        'name'=>'required',
        'couleur1'=>'required',
        'couleur2'=>'required',
        'type'=>'required',
        'pack'=>'required',
        'police'=>'required',
        'description'=>'required',

    ]);
        
        $commandes =new Commande;
        $commandes->name=$request->input('name');
        $commandes->couleur=$request->input('couleur1');
        $commandes->couleur1=$request->input('couleur2');
        $commandes->tamplate='NULL';
        $commandes->type=$request->input('type');
        $commandes->police=$request->input('police');
        $commandes->packes_id=$request->input('pack');
        $commandes->description=$request->input('description');
        $commandes->user_id=Auth()->user()->id;
        $commandes->service_id='003';
        $commandes->save();
        $commandes->id;
       
       
        return redirect()->route('rendezvous',$commandes->id);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\commandes  $commandes
     * @return \Illuminate\Http\Response
     */
    public function show(commandes $commandes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\commandes  $commandes
     * @return \Illuminate\Http\Response
     */
    public function edit(commandes $commandes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\commandes  $commandes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, commandes $commandes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\commandes  $commandes
     * @return \Illuminate\Http\Response
     */
    public function destroy(commandes $commandes)
    {
        //
    }
}
