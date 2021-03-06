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


Auth::routes();
Route::get('/', 'ContratosController@index')->name('Administração');
Route::get('contratos/novo', 'ContratosController@adicionar_form');
Route::post('contratos/salvar', 'ContratosController@to_choose');
Route::resource('/contratos', 'ContratosController');



//ContratosPublicos
Route::get('contrato/{token_id}', 'SiteController@index');
