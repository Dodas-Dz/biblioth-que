<?php

use Illuminate\Support\Facades\Route;

Route::get('/statistique', [App\Http\Controllers\HomeController::class, 'statistic'])->name('statistic');
Route::get('/liste', [App\Http\Controllers\HomeController::class, 'liste'])->name('liste');
Route::get('/ProfileAdmin', [App\Http\Controllers\HomeController::class, 'profileadmin'])->name('profileadmin');
Route::get('/ListeAdmin', [App\Http\Controllers\HomeController::class, 'listelivre'])->name('listelivre');
Auth::routes();
Route::get('/', function () {
    return view('user/index');
})->name('homee');
Route::get('/recherche', function () {
    return view('user/recherche');
})->name('recherche');
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
