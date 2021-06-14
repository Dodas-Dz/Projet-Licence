<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();
route::post('/home', [App\Http\Controllers\CommandesController::class, 'message'])->name('message');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/service-web', [App\Http\Controllers\ServiceController::class, 'index_web'])->name('serviceweb');
Route::get('/service-app', [App\Http\Controllers\ServiceController::class, 'index_app'])->name('serviceapp');
Route::get('/service-des', [App\Http\Controllers\ServiceController::class, 'index_des'])->name('servicedes');
Route::get('/apropos-nous', function () {
    return view('web/apropos');
})->name('apropos');

Route::middleware(['auth'])->group(function () {
    Route::get('/mycommande', [App\Http\Controllers\CommandesController::class,'getMyCommandes'])->name('commandeuser');
   

    /********************************************rendezvous******************************************************************************************** */
    Route::get('/rendezvous/{id}', [App\Http\Controllers\RendezvousController::class, 'index'])->name('rendezvous');
    route::post('rendezvossus', [App\Http\Controllers\RendezvousController::class, 'store'])->name('rendez_vous');
    /***********************************************commande***************************************************************************************** */
    route::post('/templateweb', [App\Http\Controllers\CommandesController::class, 'store'])->name('commande');
    route::post('/templateapp', [App\Http\Controllers\CommandesController::class, 'commandeapp'])->name('commandeapp');
    route::post('/templatedesign', [App\Http\Controllers\CommandesController::class, 'commandedesign'])->name('commandedesign');
    Route::get('/paiments', function () {
        return view('web/paiment');
    })->name('paiment');
});
/**********************************commande-interface ***************************************************** */
Route::get('/message', [App\Http\Controllers\CommandesController::class,'getmessage'])->middleware('can:isAdmin')->name('allmessage');
Route::get('/All_commande', [App\Http\Controllers\CommandesController::class,'getCommandesAdmin'])->middleware('can:isAdmin')->name('commandeadmin');
Route::get('deleteComande/{id}',[App\Http\Controllers\CommandesController::class,'deleteCommande'])->middleware('can:isAdmin')->name('commande.delete');
Route::get('message/{id}',[App\Http\Controllers\CommandesController::class,'deletemessage'])->middleware('can:isAdmin')->name('message.delete');
Route::PUT('toggleCommande/{id}',[App\Http\Controllers\CommandesController::class,'toggleCommande'])->middleware('can:isAdmin')->name('toggleCommande');
/**etatcommande */
/**************************************************template************************************************************************************** */
/*Route::get('/template/{item}', function ($item) {
    return view("web/templateweb/".$item);
})->name('a');*/
Route::get('/ethereal', function () {
    return view('web/templateweb');
})->name('ethereal');

Route::get('/lense', function () {
    return view('web/templateweb/lense');
})->name('lense');

Route::get('/restaurant', function () {
    return view('web/templateweb/restaurant');
})->name('restaurant');

Route::get('/twenty', function () {
    return view('web/templateweb/twenty');
})->name('twenty');

Route::get('/strong', function () {
    return view('web/templateweb/stronglytuped');
})->name('strong');

Route::get('/strata', function () {
    return view('web/templateweb/strata');
})->name('strata');

/**************************************************service************************************************************************************ */
Route::get('/templateweb', function () {
    return view('web\pages\formulaire\site');
})->name('templateweb');
Route::get('/templatedesign', function () {
    return view('web\pages\formulaire\design');
})->name('templatdesign');
Route::get('/templateapp', function () {
    return view('web\pages\formulaire\app');
})->name('templateapp');

Route::get('/paiments', function () {
    return view('web/paiment');
})->name('paiment');