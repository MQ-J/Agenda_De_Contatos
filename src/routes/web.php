<?php

use Illuminate\Support\Facades\Route;


/* TELA PRINCIPAL E AÇÃO CRUD - READ */
Route::get('/', 'App\Http\Controllers\ContatoController@show');

/* DEMAIS TELAS */

Route::get('/novoContato', 'App\Http\Controllers\ContatoController@create');

Route::get('/editarContato', 'App\Http\Controllers\ContatoController@edit');

Route::get('/apagarContato', 'App\Http\Controllers\ContatoController@delete');

/*DEMAIS ACÕES CRUD*/

Route::get('/guardaContato', 'App\Http\Controllers\ContatoController@store');

Route::get('/atualizaContato', 'App\Http\Controllers\ContatoController@update');

Route::get('/destroiContato', 'App\Http\Controllers\ContatoController@destroy');