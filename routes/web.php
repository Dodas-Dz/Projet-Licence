<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/service-web', [App\Http\Controllers\ServiceController::class, 'index_web'])->name('serviceweb');
Route::get('/service-app', [App\Http\Controllers\ServiceController::class, 'index_app'])->name('serviceapp');

Route::get('/apropos-nous', function () {
    return view('web/apropos');
})->name('apropos');

Route::get('/templateweb', function () {
    return view('web/templateweb');
})->name('templateweb');
Route::get('/templateapp', function () {
    return view('web/templateapp');
})->name('templateapp');


