<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Ruta de defecto
Route::get('/', function () {
    return view('welcome');
});

// Ruta a base
Route::get('/base', function () {
    return view('base');
});

// Ruta a inicio
Route::get('/bienvenida', function () {
    return view('inicio');
});

// Ruta a contacto
Route::get('/contacto', function () {
    return view('contacto');
});

// Ruta a nosotros
Route::get('/nosotros/{nombre?}/{email?}', function ($nombre="Anonimo", $email="anonimo@gmail.com") {
    return view('nosotros')
    ->with('nombre', $nombre)
    ->with('email', $email);
})->where([
    'nombre' => '[A-Za-z]+',
    'email' => '[A-Za-z@.0-9]+'
]);