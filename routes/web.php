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

<<<<<<< HEAD
Route::get('/Registro_socio', 'Registro_socio@mostrarformulario');

Route::post('/Registro_socio', 'Registro_socio@devuelverespuesta')->name('Registro_socio.devuelverespuesta');
=======
Route::get('/prueba', function () {
    return view('prueba');
});

Route::get('/arbol', function () {
    return view('arbol');
});

Route::get('/formulario', function () {
    return view('formulario_registro');
});
>>>>>>> dbc9c308e8c7c55e6d3329f4bce66b19737d0546
