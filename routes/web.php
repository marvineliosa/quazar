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

//RUTAS DE AXEL (SI ESTAN BIEN :V)
//otra forma de simplificar rutas
 // Route::get('/NuevoSocio','UsuarioSocioController@index');
 // Route::get('/NuevoSocio/create','UsuarioSocioController@create');
 //
//
Route::get('/formulario', 'UsuarioSocioController@create');
Route::get('/usuario_socio/edit','UsuarioSocioController@edit');


//otra forma de simplificar aun mas las rutas
//creamos todas las rutas para acceder al controlador por todos sus metodos
Route::resource('usuario_socio','UsuarioSocioController');
Route::get('/registro_socio2', 'UsuarioSocioController@VistaFormularioRegistro');


//RUTAS DE AXEL
//rutas de formulario antigua (solo es para ver un ejemplo de la vista)
Route::get('/Registro_socio', 'Registro_socio@mostrarformulario');


// ruta de prueba laravel

// Route::get('/prueba', function () {
//     return view('prueba');
// });

//rutas para mostrar datos del formulario de comisiones
Route::get('/socios', function () {
    return view('listado_registros');
});
Route::get('/comisiones', function () {
    return view('listado_comisiones');
});



//rutas de gera
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

Route::get('/lineas', function () {
    return view('arboles1');
});


//
