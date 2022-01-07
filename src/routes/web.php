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
|
*/

// JÁ VEIO COM ISSO
// Route::get('/', function () {
//     return view('welcome');
// });

// EU TENTANDO
// Route::get('localhost:8080/', 'App/Http/Controllers/ContatoController::index');

/*TELAS PRINCIPAIS*/
Route::get('/', function () {
  echo App\Http\Controllers\ContatoController::show();
});
Route::get('/novoContato', 'App\Http\Controllers\ContatoController@create');

Route::get('/editarContato', 'App\Http\Controllers\ContatoController@edit');

Route::get('/apagarContato', function () {
  echo App\Http\Controllers\ContatoController::index(3);
});

/*TENTATIVAS DE CRIAR CONTATO NO CONTROLLER*/

Route::get('/guardaContato', 'App\Http\Controllers\ContatoController@store');

Route::get('/atualizaContato', 'App\Http\Controllers\ContatoController@update');