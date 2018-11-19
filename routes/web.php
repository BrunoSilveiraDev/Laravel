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

 Route::get('/', 'PaginasController@home');
Route::get('/contato', 'PaginasController@contato');
Route::get('/sobre', 'PaginasController@sobre');
Route::get('/comida', 'PaginasController@comida');



Route::resource('comidas','ComidaController');
Route::resource('comidas/cadastra','ComidaController');
Route::resource('comidas/edita','ComidaController');
