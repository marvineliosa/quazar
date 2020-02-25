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

//ruta de pagina de inicio
Route::get('/', function () {
    return view('pagina_inicio');
});
// ruta de prueba laravel
Route::get('/prueba', function () {
    return view('prueba');
});
//rutas de formulario antigua (solo es para ver un ejemplo de la vista)
Route::get('/Registro_socio', 'Registro_socio@mostrarformulario');
///////////////////////////////////////////////////////////////////
Route::get('/', function () {
    return view('welcome');
});


//RUTAS DE AXEL (SI ESTAN BIEN :V)

Route::get('/formulario', 'UsuarioSocioController@index');


Route::get('/registro_socio', 'RegistroSocioController@index');
Route::get('/registro_socio/create', 'RegistroSocioController@create');
Route::resource('registro_socio','RegistroSocioController');


//otra forma de simplificar aun mas las rutas
//creamos todas las rutas para acceder al controlador por todos sus metodos
Route::resource('usuario_socio','UsuarioSocioController');



////////////////////////////////////////////////////////
//rutas para mostrar datos del formulario de comisiones
Route::get('/comisiones', function () {
    return view('listados/listado_comisiones');
});
Route::get('/pedidos', function () {
    return view('listados/listado_pedidos');
});
Route::get('/socios', function () {
    return view('listados/listado_registros');
});
Route::get('/pedidos', function () {
    return view('listados/listado_socios');
});
////////////////////////////////////////////////////////

////////////////////////////////////////////////////////
//rutas de gera
Route::get('/lineas', function () {
    return view('arboles/arboles1');
});
Route::get('/arbol', function () {
    return view('/arboles/arbol2');
});
Route::get('/arbol2', function () {
    return view('/arboles/arbol3');
});
Route::get('/arbol3', function () {
    return view('/arboles/arbol4');
});
////////////////////////////////////////////////////////
