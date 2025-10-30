<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pagina-chillan');
});

Route::get('/principal', function () { 
    return view('principal'); 
});


Route::get('/modelo-auto', function () {
    return view('modelo-auto');
});

Route::get('/modelo-goldenskull', function () {
    return view('modelo-goldenskull');
});

Route::get('/modelo-estefano', function () {
    return view('modelo-estefano');
});