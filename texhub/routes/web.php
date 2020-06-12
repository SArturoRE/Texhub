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
    return view('welcome');
});

Route::get('principal', function () {
    return view('principal');
});

Route::get('biblio_admin', function () {
    return view('biblio_admin');
});

Route::get('inicio_admin', function () {
    return view('inicio_admin');
});

Route::get('usuarios', function () {
    return view('usuarios');
});

Route::get('articulos', function () {
    return view('articulos');
});

Route::get('colaboraciones', function () {
    return view('colaboraciones');
});

Route::get('temas', function () {
    return view('temas');
});

Route::get('reportes', function () {
    return view('reportes');
});