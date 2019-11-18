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


Route::get('/Registro_socio', 'Registro_socio@mostrarformulario');

Route::post('/Registro_socio', 'Registro_socio@devuelverespuesta')->name('Registro_socio.devuelverespuesta');

Route::post('/socios/registrar_socio', 'UsuariosController@RegistrarSocio');

Route::get('/prueba', function () {
    return view('prueba');
});
Route::get('/socios', function () {
    return view('listado_registros');
});
Route::get('/comisiones', function () {
    return view('listado_comisiones');
});

Route::get('/arbol', function () {
    return view('arbol2');
});

Route::get('/arbol2', function () {
    return view('arbol3');
});

Route::get('/arbol3', function () {
    return view('arbol4');
});
Route::get('/pedidos', function () {
    return view('listado_pedidos');
});

Route::get('/formulario', function () {
    return view('formulario_registro');
});

Route::get('/linea', function () {
    return view('linea');
});


//
