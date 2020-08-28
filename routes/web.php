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
// Route::get('/', function () {
//     return view('welcome');
// });


////////////Rutas para autenticacion de usuario////////////
// Auth::routes();
Auth::routes(['verify' => true]);
// Route::get('/home', 'HomeController@index')->name('home')->middleware('verified'); para verificar solo una ruta
//Agrupamos las rutas que queremos que sean verificadas por email en el login
Route::group(['middleware' => 'verified'], function (){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('registro_socio','RegistroSocioController'); // nos verifica el login para todo el mcr de registro_socio 

});


////////////Ruta de pagina de inicio////////////
Route::get('/', function () {
    return view('pagina_inicio');
});


////////////Ruta de prueba laravel////////////
Route::get('/prueba', function () {
    return view('prueba');
});


////////////RUTAS DE AXEL (SI ESTAN BIEN :V)////////////

// Route::get('/formulario', 'RegistroSocioController@index');


// Route::get('/api/registro_socios', function () {
//   return datatables()->eloquent(User::query())->toJson();
//
// });

//otra forma de simplificar aun mas las rutas
// Route::get('/registro_socio', 'RegistroSocioController@index');

// Route::get('/registro_socio/create', 'RegistroSocioController@create');
// Route::get('/registro_socio/botones_accion', 'RegistroSocioController@destroy');

//creamos todas las rutas para acceder al controlador por todos sus metodos
// Route::resource('registro_socio','RegistroSocioController');





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
Route::get('/pedidos2', function () {
    return view('listados/listado_socios');
});
////////////////////////////////////////////////////////

////////////////////////////////////////////////////////
//rutas de gera
//GENERACIONAL
Route::get('/arbol', function () {
    return view('/arboles/arbol');
});

Route::get('/arbol2', function () {
    return view('/arboles/arbol2');
});
Route::get('/arbol3', function () {
    return view('/arboles/arbol3');
});
Route::get('/arboles1', function () {
    return view('/arboles/arboles1');
});
Route::get('/borrar', function () {
    return view('/arboles/borrar');
});
Route::get('/linea', function () {
    return view('/arboles/linea');
});
////////////////////////////////////////////////////////
