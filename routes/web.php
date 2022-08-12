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
