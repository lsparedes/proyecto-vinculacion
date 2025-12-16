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


Route::get('/modelo-completo', function () {
    return view('modelo-completo');
});

Route::get('/primer-piso', function () {
    return view('primer-piso');
});

Route::get('/segundo-piso', function () {
    return view('segundo-piso');
});

Route::get('/ar-modelo-1', function () {
    return view('ar_view');
});

Route::get('/ar-modelo-2', function () {
    return view('ar_view2');
});
Route::get('/ar-modelo-3', function () {
    return view('ar_view3');
});