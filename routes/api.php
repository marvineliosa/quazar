<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('registro_socios', function(){
// carga del lado del servidor
return datatables()
//hago mi consulta al server para la tabla registro_socios
->query(DB::table('registro_socios'))
//agrego una columna a mi tabla btn para los botones de accion
->addColumn('btn','registro_socio/botones_accion')
//le estamos diciendo al server Renderiza todo, excepto la columna btn
->rawColumns(['btn'])
->toJson();

});

// lo que tenia como ejemplo, pero ahorita no me sirve
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
