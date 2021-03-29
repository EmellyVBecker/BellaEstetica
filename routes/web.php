<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function (){

Route::get('/fornecedores', 'FornecedoresController@index');
Route::get('/fornecedores/edit{id}', 'FornecedoresController@edit');
Route::get('/fornecedores/remove{id}', 'FornecedoresController@remove');
Route::post('/fornecedores/search/', 'FornecedoresController@search');
Route::post('/fornecedores/update/', 'FornecedoresController@update');
Route::get('/fornecedores/create', "FornecedoresController@create"); // carregar o formulário
Route::post('/fornecedores/store', 'FornecedoresController@store'); // salvar os dados do formulário

Route::get('/despesas', 'DespesasController@index');
Route::get('/despesas/edit{id}', 'DespesasController@edit');
Route::get('/despesas/remove{id}', 'DespesasController@remove');
Route::post('/despesas/search/', 'DespesasController@search');
Route::post('/despesas/update/', 'DespesasController@update');
Route::get('/despesas/create', "DespesasController@create"); // carregar o formulário
Route::post('/despesas/store', 'DespesasController@store'); // salvar os dados do formulário

Route::get('/clientes', 'ClientesController@index');
Route::get('/clientes/create', "ClientesController@create"); // carregar o formulário
Route::post('/clientes/store', 'ClientesController@store'); // salvar os dados do formulário
Route::get('/clientes/edit{id}', 'ClientesController@edit');
Route::get('/clientes/remove{id}', 'ClientesController@remove');
Route::post('/clientes/update/', 'ClientesController@update');
Route::post('/clientes/search/', 'ClientesController@search');

Route::get('/procedimentos', 'ProcedimentosController@index');
Route::get('/procedimentos/create', "ProcedimentosController@create"); // carregar o formulário
Route::post('/procedimentos/store', 'ProcedimentosController@store'); // salvar os dados do formulário
Route::get('/procedimentos/edit{id}', 'ProcedimentosController@edit');
Route::get('/procedimentos/remove{id}', 'ProcedimentosController@remove');
Route::post('/procedimentos/update/', 'ProcedimentosController@update');
Route::post('/procedimentos/search/', 'ProcedimentosController@search');

Route::get('/agendas', 'AgendasController@index');
Route::get('/agendas/create', "AgendasController@create"); // carregar o formulário
Route::post('/agendas/store', 'AgendasController@store'); // salvar os dados do formulário
Route::get('/agendas/edit{id}', 'AgendasController@edit');
Route::get('/agendas/remove{id}', 'AgendasController@remove');
Route::post('/agendas/update/', 'AgendasController@update');
Route::post('/agendas/search/', 'AgendasController@search');

});