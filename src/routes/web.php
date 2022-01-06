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
Route::get('/novoContato', function () {
  echo App\Http\Controllers\ContatoController::index(1);
});
Route::get('/editarContato', function () {
  echo App\Http\Controllers\ContatoController::index(2);
});
Route::get('/apagarContato', function () {
  echo App\Http\Controllers\ContatoController::index(3);
});

/*TELAS SECUNDÁRIAS DE AÇÃO*/
Route::get('/guardaContato', [ContatoController::class, 'store'])->name('novocontato');