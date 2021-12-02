<?php

use Illuminate\Support\Facades\Route;
Auth::routes();
Route::post('/searchedBooks', [App\Http\Controllers\LivreController::class, 'searchedBooks'])->middleware('can:isBoth')->name('searchedBooks');

Route::middleware(['auth'])->group(function () {
Route::get('/statistique', [App\Http\Controllers\HomeController::class, 'statistic'])->middleware('can:isBoth')->name('statistic');
Route::get('/liste', [App\Http\Controllers\abonneController::class, 'abonne'])->middleware('can:isBoth')->name('liste');
Route::get('/ProfileAdmin', [App\Http\Controllers\HomeController::class, 'profileadmin'])->middleware('can:isBoth')->name('profileadmin');
Route::get('/Listelivre', [App\Http\Controllers\LivreController::class, 'Livres'])->middleware('can:isBoth')->name('listelivre');
Route::get('/categorie', [App\Http\Controllers\CategorieController::class, 'getCategories'])->middleware('can:isBoth')->name('categorie');
Route::get('/supprimer', [App\Http\Controllers\HomeController::class, 'supprimer'])->middleware('can:isBoth')->name('supprimer');
Route::get('/message', [App\Http\Controllers\MessageController::class, 'show'])->middleware('can:isBoth')->name('message');
Route::get('/AjouterGestionnaire', [App\Http\Controllers\HomeController::class, 'AjouterG'])->middleware('can:isAdmin')->name('AjouterG');
Route::get('/ListeUser', [App\Http\Controllers\Auth\registere::class, 'getUser'])->middleware('can:isAdmin')->name('listeuser');
Route::get('/AjouterMot', [App\Http\Controllers\HomeController::class, 'AjouterMot'])->middleware('can:isBoth')->name('AjouterMot');
Route::post('/AjouterMot', [App\Http\Controllers\MotController::class, 'AjouterMots'])->middleware('can:isBoth')->name('AjouterMots');
Route::post('/AjouterLivre', [App\Http\Controllers\LivreController::class, 'AjouterL'])->middleware('can:isAdmin')->name('AjouterL');
Route::post('/AjouterGestionnaire', [App\Http\Controllers\Auth\registere::class, 'create'])->middleware('can:isAdmin')->name('create');
Route::post('/liste', [App\Http\Controllers\abonneController::class, 'create'])->middleware('can:isAdmin')->name('createabonne');
Route::get('/emprunter', [App\Http\Controllers\HomeController::class, 'emprunter'])->middleware('can:isBoth')->name('emprunter');
Route::get('deleteAbonne/{id}',[App\Http\Controllers\AbonneController::class,'deleteAbonne'])->middleware('can:isAdmin')->name('abonne.delete');
Route::get('deletelivres/{id}',[App\Http\Controllers\LivreController::class,'deleteLivre'])->middleware('can:isAdmin')->name('Livre.delete');
Route::get('/search_livre', [App\Http\Controllers\LivreController::class, 'search_admin'])->middleware('can:isBoth')->name('searchAdmin');

Route::get('/download-pdf/{id}', [App\Http\Controllers\AbonneController::class, 'getPostPdf'])->middleware('can:isBoth')->name('abonne.pdf');

Route::get('deleteNotification/{id}',[App\Http\Controllers\abonneNotification::class,'deleteNotification'])->middleware('can:isAdmin')->name('notif.delete');

});
/* Testing Routes for Excel */
Route::get('excel',[App\Http\Controllers\TestController::class,'view']);
Route::POST('excelUpload',[App\Http\Controllers\TestController::class,'import'])->name('import');
/* END Tensting */

Route::get('/home', [App\Http\Controllers\GuestServer::class, 'Home'])->name('homee');
Route::get('/', [App\Http\Controllers\GuestServer::class, 'Home']);
Route::get('/Enprente', [App\Http\Controllers\GuestServer::class, 'Emprente'])->name('Emprente');
Route::get('/Apropos', [App\Http\Controllers\GuestServer::class, 'Apropos'])->name('Apropos');
Route::get('/recherche', [App\Http\Controllers\LivreController::class, 'Livress'])->name('recherche');
Route::get('/recherchee', [App\Http\Controllers\LivreController::class, 'search'])->name('search');

Route::post('/Apropos', [App\Http\Controllers\MessageController::class, 'create'])->name('Apropos');
