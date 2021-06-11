<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/service-web', [App\Http\Controllers\ServiceController::class, 'index_web'])->name('serviceweb');
Route::get('/service-app', [App\Http\Controllers\ServiceController::class, 'index_app'])->name('serviceapp');
Route::get('/service-des', [App\Http\Controllers\ServiceController::class, 'index_des'])->name('servicedes');
Route::get('/apropos-nous', function () {
    return view('web/apropos');
})->name('apropos');

Route::get('/mycommande', function () {
    return view('web/commandeuser');
})->name('commandeuser');
/********************************************rendezvous******************************************************************************************** */
Route::get('/rendezvouss', [App\Http\Controllers\RendezvousController::class, 'index'])->name('rendezvous');
/***********************************************commande***************************************************************************************** */
route::post('/templateweb', [App\Http\Controllers\CommandesController::class, 'store'])->name('commande');
route::post('/templateapp', [App\Http\Controllers\CommandesController::class, 'store'])->name('commande');

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

