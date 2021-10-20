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
    return view('usuarios.home');
});

Route::get('/home', function () {
    return view('usuarios.home');
});

Route::get('/hogar', function () {
    return view('usuarios.hogar');
});

Route::get('/negocio', function () {
    return view('usuarios.negocio');
});

Route::get('/trabajo', function () {
    return view('usuarios.trabajo');
});

Route::get('/electronico', function () {
    return view('usuarios.electronico');
});

Route::get('/loguin', function () {
    return view('usuarios.loguin');
});

Route::get('/registro', function () {
    return view('usuarios.registro');
});

Route::get('/contacto', function () {
    return view('usuarios.contacto');
});