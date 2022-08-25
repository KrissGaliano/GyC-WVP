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

Route::get('/login', function () {
    return view('Login');
});

Route::get('/recuperar', function () {
    return view('Recuperar');
});

Route::get('/registro', function () {
    return view('Registro');
});

Route::get('/saludo', function () {
    return view('Saludo');
});

Route::get('/homeUser', function () {
    return view('HomeUser');
});

Route::get('/bienvenida', function () {
    return view('Bienvenida');
});

Route::get('/somosWV', function () {
    return view('SomosWV');
});

Route::get('/beneficios', function () {
    return view('Beneficios');
});

Route::get('/relaciones', function () {
    return view('Relaciones');
});

Route::get('/politica', function () {
    return view('PolideAnti');
});

Route::get('/proteccion', function () {
    return view('Proteccion');
});

Route::get('/comunicaciones', function () {
    return view('Comunicaciones');
});

Route::get('/sostenibilidad', function () {
    return view('Sostenibilidad');
});

Route::get('/seguridad', function () {
    return view('Seguridad');
});

Route::get('/tuAgenda', function () {
    return view('TuAgenda');
});

Route::get('/tuMundoWVP', function () {
    return view('TuMundoWVP');
});


