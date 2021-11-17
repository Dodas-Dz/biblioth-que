<?php

use Illuminate\Support\Facades\Route;
Auth::routes();

Route::middleware(['auth'])->group(function () {
Route::get('/statistique', [App\Http\Controllers\HomeController::class, 'statistic'])->middleware('can:isBoth')->name('statistic');
Route::get('/liste', [App\Http\Controllers\HomeController::class, 'liste'])->middleware('can:isBoth')->name('liste');
Route::get('/ProfileAdmin', [App\Http\Controllers\HomeController::class, 'profileadmin'])->middleware('can:isBoth')->name('profileadmin');
Route::get('/Listelivre', [App\Http\Controllers\LivreController::class, 'Livres'])->middleware('can:isBoth')->name('listelivre');
Route::get('/categorie', [App\Http\Controllers\HomeController::class, 'categorie'])->middleware('can:isBoth')->name('categorie');
Route::get('/notification', [App\Http\Controllers\HomeController::class, 'notification'])->middleware('can:isBoth')->name('notification');
Route::get('/message', [App\Http\Controllers\HomeController::class, 'message'])->middleware('can:isBoth')->name('message');
Route::get('/AjouterGestionnaire', [App\Http\Controllers\HomeController::class, 'AjouterG'])->middleware('can:isAdmin')->name('AjouterG');
Route::get('/ListeUser', [App\Http\Controllers\Auth\registere::class, 'getUser'])->middleware('can:isAdmin')->name('listeuser');

Route::get('/AjouterMot', [App\Http\Controllers\HomeController::class, 'AjouterMot'])->middleware('can:isBoth')->name('AjouterMot');
Route::post('/AjouterMot', [App\Http\Controllers\MotController::class, 'AjouterMots'])->middleware('can:isBoth')->name('AjouterMots');

Route::post('/AjouterLivre', [App\Http\Controllers\LivreController::class, 'AjouterL'])->middleware('can:isAdmin')->name('AjouterL');
Route::post('/AjouterGestionnaire', [App\Http\Controllers\Auth\registere::class, 'create'])->middleware('can:isAdmin')->name('create');


});


Route::get('/recherche', [App\Http\Controllers\GuestServer::class, 'Recherche'])->name('recherche');
Route::get('/home', [App\Http\Controllers\GuestServer::class, 'Home'])->name('homee');
Route::get('/', [App\Http\Controllers\GuestServer::class, 'Home']);
Route::get('/Enprente', [App\Http\Controllers\GuestServer::class, 'Emprente'])->name('Emprente');
Route::get('/Apropos', [App\Http\Controllers\GuestServer::class, 'Apropos'])->name('Apropos');


/*route::post('/home', [App\Http\Controllers\CommandesController::class, 'message'])->name('message');

Route::get('/service-web', [App\Http\Controllers\ServiceController::class, 'index_web'])->name('serviceweb');
Route::get('/service-app', [App\Http\Controllers\ServiceController::class, 'index_app'])->name('serviceapp');
Route::get('/service-des', [App\Http\Controllers\ServiceController::class, 'index_des'])->name('servicedes');
Route::get('/apropos-nous', function () {
    return view('web/apropos');
})->name('apropos');

Route::middleware(['auth'])->group(function () {
    Route::get('/mycommande', [App\Http\Controllers\CommandesController::class,'getMyCommandes'])->name('commandeuser');
   

    /********************************************rendezvous********************************************************************************************/
   /* Route::get('/rendezvous/{id}', [App\Http\Controllers\RendezvousController::class, 'index'])->name('rendezvous');
    route::post('rendezvossus', [App\Http\Controllers\RendezvousController::class, 'store'])->name('rendez_vous');
    /***********************************************commande***************************************************************************************** */
  /*  route::post('/templateweb', [App\Http\Controllers\CommandesController::class, 'store'])->name('commande');
    route::post('/templateapp', [App\Http\Controllers\CommandesController::class, 'commandeapp'])->name('commandeapp');
    route::post('/templatedesign', [App\Http\Controllers\CommandesController::class, 'commandedesign'])->name('commandedesign');
    Route::get('/paiments', function () {
        return view('web/paiment');
    })->name('paiment');
});
/**********************************commande-interface ***************************************************** */
/*Route::get('/message', [App\Http\Controllers\CommandesController::class,'getmessage'])->middleware('can:isAdmin')->name('allmessage');
Route::get('/All_commande', [App\Http\Controllers\CommandesController::class,'getCommandesAdmin'])->middleware('can:isAdmin')->name('commandeadmin');
Route::get('deleteComande/{id}',[App\Http\Controllers\CommandesController::class,'deleteCommande'])->middleware('can:isAdmin')->name('commande.delete');
Route::get('message/{id}',[App\Http\Controllers\CommandesController::class,'deletemessage'])->middleware('can:isAdmin')->name('message.delete');
Route::PUT('toggleCommande/{id}',[App\Http\Controllers\CommandesController::class,'toggleCommande'])->middleware('can:isAdmin')->name('toggleCommande');

/**************************************************template**************************************************************************************/ 
