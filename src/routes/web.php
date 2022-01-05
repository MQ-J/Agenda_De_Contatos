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

Route::get('/', function () {
  echo App\Http\Controllers\ContatoController::index(0);
});

Route::get('/novoContato', function () {
  echo App\Http\Controllers\ContatoController::novo();
});

Route::get('/editarContato', function () {
  echo App\Http\Controllers\ContatoController::index(2);
});

Route::get('/apagarContato', function () {
  echo App\Http\Controllers\ContatoController::index(3);
});
