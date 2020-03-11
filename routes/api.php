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

return datatables()
->query(DB::table('registro_socios'))
->addColumn('btn','registro_socio/botones_accion')
->rawColumns(['btn'])
->toJson();

});
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
