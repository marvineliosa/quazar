<?php

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
    return view('pagina_inicio');
});

Route::get('/prueba', function () {
    return view('prueba');
});

Route::get('/arbol', function () {
    return view('arbol');
});

Route::get('/formulario', function () {
    return view('formulario_registro');
});
