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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/associado', 'AssociadoController@index');

Route::post('/associado', 'AssociadoController@storage');

Route::put('/associado/{id}', 'AssociadoController@update');

Route::delete('/associado/{id}', 'AssociadoController@delete');

Route::get('/associado/{id}', 'AssociadoController@findId');

