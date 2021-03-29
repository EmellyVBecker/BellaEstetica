<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/despesa/store', 'Api\DespesaApiController@store'); // salvar os dados do formulário

Route::put('/despesa/update/{id}', 'Api\DespesaApiController@update'); // atualiza os dados

Route::get('/despesa', 'Api\DespesaApiController@index'); // carregar os dados do BD

Route::get('/despesa/{id}', 'Api\DespesaApiController@show'); // carregar os dados do BD 

Route::delete('/despesa/{id}', 'Api\DespesaApiController@destroy'); // carregar os dados do BD 

Route::post('/despesa/search', 'Api\DespesaApiController@search'); // busca os dados
