<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatsController;
use App\Mail\AbonneMail;
use Illuminate\Support\Facades\Mail;

/*Route::get('/email',function(){
    Mail::to('email@gmail.com')->send(new AbonneMail());

    return new AbonneMail();
});*/


Auth::routes();
Route::post('/searchedBooks', [App\Http\Controllers\LivreController::class, 'searchedBooks'])->middleware('can:isBoth')->name('searchedBooks');

Route::middleware(['auth'])->group(function () {

Route::get('/statistique', [App\Http\Controllers\HomeController::class, 'statistic'])->middleware('can:isAdmin')->name('statistic');
Route::get('/notification', [App\Http\Controllers\HomeController::class, 'notification'])->middleware('can:isBoth')->name('notification');
Route::get('/supprimer', [App\Http\Controllers\HomeController::class, 'supprimer'])->middleware('can:isBoth')->name('supprimer');
Route::get('/ProfileAdmin', [App\Http\Controllers\HomeController::class, 'profileadmin'])->middleware('can:isBoth')->name('profileadmin');

Route::get('/categorie', [App\Http\Controllers\HomeController::class, 'categorie'])->middleware('can:isBoth')->name('categorie');
Route::get('/AjouterGestionnaire', [App\Http\Controllers\HomeController::class, 'AjouterG'])->middleware('can:isAdmin')->name('AjouterG');
Route::get('/emprunter', [App\Http\Controllers\HomeController::class, 'emprunter'])->middleware('can:isBoth')->name('emprunter');
Route::get('/rendre', [App\Http\Controllers\HomeController::class, 'rendre'])->middleware('can:isBoth')->name('rendre');

Route::get('/liste', [App\Http\Controllers\abonneController::class, 'abonne'])->middleware('can:isBoth')->name('liste');
Route::get('/Listelivre', [App\Http\Controllers\LivreController::class, 'Livres'])->middleware('can:isBoth')->name('listelivre');
Route::get('/message', [App\Http\Controllers\MessageController::class, 'show'])->middleware('can:isBoth')->name('message');
Route::get('/ListeUser', [App\Http\Controllers\Auth\registere::class, 'getUser'])->middleware('can:isAdmin')->name('listeuser');

Route::get('/Mot-cle', [App\Http\Controllers\MotController::class, 'show'])->middleware('can:isBoth')->name('AjouterMot');

Route::post('/AjouterMot', [App\Http\Controllers\MotController::class, 'Ajouter_mot'])->middleware('can:isAdmin')->name('Ajouter_mot');
Route::get('deleteMot/{id}',[App\Http\Controllers\MotController::class,'destroy'])->middleware('can:isAdmin')->name('Mot.delete');
Route::get('/modifier-mot/{id}', [App\Http\Controllers\MotController::class, 'edit'])->middleware('can:isAdmin')->name('mot.edit');
Route::put('/modifier-mot/{id}', [App\Http\Controllers\MotController::class, 'update'])->middleware('can:isAdmin')->name('mot.update');

Route::get('/categorie', [App\Http\Controllers\CategorieController::class, 'getCategories'])->middleware('can:isBoth')->name('categorie');
Route::get('/AjouterCategorie', [App\Http\Controllers\CategorieController::class, 'create'])->middleware('can:isAdmin')->name('create.categorie');
Route::post('/AjouterCategorie', [App\Http\Controllers\CategorieController::class, 'store'])->middleware('can:isAdmin')->name('store.categorie');
Route::get('deletecategorie/{id}',[App\Http\Controllers\CategorieController::class,'destroy'])->middleware('can:isAdmin')->name('Categorie.delete');
Route::get('/modifier-categorie/{id}', [App\Http\Controllers\CategorieController::class, 'edit'])->middleware('can:isBoth')->name('categorie.edit');
Route::put('/modifier-categorie/{id}', [App\Http\Controllers\CategorieController::class, 'update'])->middleware('can:isBoth')->name('categorie.update');

Route::get('/listeemprente', [App\Http\Controllers\EmpreinteController::class, 'show'])->middleware('can:isBoth')->name('listeemprente');


Route::post('/AjouterGestionnaire', [App\Http\Controllers\Auth\registere::class, 'create'])->middleware('can:isAdmin')->name('create');

Route::get('/modifier-employe/{id}', [App\Http\Controllers\Auth\registere::class, 'edit'])->middleware('can:isAdmin')->name('user.edit');
Route::put('/modifier-employe/{id}', [App\Http\Controllers\Auth\registere::class, 'update'])->middleware('can:isAdmin')->name('user.update');
Route::get('/supprimer-employe/{id}', [App\Http\Controllers\Auth\registere::class, 'delete'])->middleware('can:isAdmin')->name('user.delete');


Route::post('/liste', [App\Http\Controllers\abonneController::class, 'create'])->middleware('can:isAdmin')->name('createabonne');
Route::get('deleteAbonne/{id}',[App\Http\Controllers\AbonneController::class,'deleteAbonne'])->middleware('can:isAdmin')->name('abonne.delete');
Route::get('deletelivres/{id}',[App\Http\Controllers\LivreController::class,'deleteLivre'])->middleware('can:isAdmin')->name('Livre.delete');
Route::get('/search_livre', [App\Http\Controllers\LivreController::class, 'search_admin'])->middleware('can:isBoth')->name('searchAdmin');
Route::get('deletemessage/{id}',[App\Http\Controllers\MessageController::class,'deletemessage'])->middleware('can:isAdmin')->name('message.delete');

Route::get('/download-pdf/{id}', [App\Http\Controllers\AbonneController::class, 'getPostPdf'])->middleware('can:isBoth')->name('abonne.pdf');

Route::post('/AjouterLivre', [App\Http\Controllers\LivreController::class, 'AjouterL'])->middleware('can:isAdmin')->name('AjouterL');
Route::get('/modifier-livre/{id}', [App\Http\Controllers\LivreController::class, 'edit'])->middleware('can:isBoth')->name('livre.edit');
Route::put('/modifier-livre/{id}', [App\Http\Controllers\LivreController::class, 'update'])->middleware('can:isBoth')->name('livre.update');
//
Route::get('/modifier-abonne/{id}', [App\Http\Controllers\AbonneController::class, 'edit'])->middleware('can:isBoth')->name('abonne.edit');
Route::patch('/modifier-abonne/{id}', [App\Http\Controllers\AbonneController::class, 'update'])->middleware('can:isBoth')->name('abonne.update');

Route::get('delete/{id}',[App\Notifications\abonneNotification::class,'deleteNotification'])->middleware('can:isAdmin')->name('notif.delete');


Route::post('/EmprenterLivre', [App\Http\Controllers\EmpreinteController::class, 'EmprenterLivre'])->middleware('can:isAdmin')->name('EmprenterLivre');
Route::post('/rendreLivre', [App\Http\Controllers\EmpreinteController::class, 'RendreLivre'])->middleware('can:isAdmin')->name('RendreLivre');

Route::get('/statistique',[App\Http\Controllers\StatsController::class, 'Chart'])->middleware('can:isAdmin')->name('statistic');

});
/* Testing Routes for Excel */
Route::get('excel',[App\Http\Controllers\TestController::class,'view']);
Route::POST('excelUpload',[App\Http\Controllers\TestController::class,'import'])->name('import');
/* END Tensting */

Route::get('/home', [App\Http\Controllers\GuestServer::class, 'Home'])->name('homee');
Route::get('/', [App\Http\Controllers\GuestServer::class, 'Home']);
Route::get('/Enprente', [App\Http\Controllers\GuestServer::class, 'Emprente'])->name('Emprente');
Route::post('/emprente', [App\Http\Controllers\EmpreinteController::class, 'voir'])->name('voir');
Route::get('/Apropos', [App\Http\Controllers\GuestServer::class, 'Apropos'])->name('Apropos');
Route::get('/recherche', [App\Http\Controllers\LivreController::class, 'Livress'])->name('recherche');

Route::get('/', [App\Http\Controllers\LivreController::class, 'livrehome']);
Route::get('/recherchee', [App\Http\Controllers\LivreController::class, 'search'])->name('search');
Route::post('/Apropos', [App\Http\Controllers\MessageController::class, 'create'])->name('Apropos');
