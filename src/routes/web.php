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

/*TENTATIVAS DE CRIAR CONTATO NO CONTROLLER*/

Route::get('/guardaContato/{nome}/{numero}', 'App\Http\Controllers\ContatoController@store');

// Route::get('/guardaContato{nome}{numero}', App\Http\Controllers\ContatoController::store(['nome' => 'direto na funcao', 'numero' => '123']));

// Route::get('/guardaContato{nome}{numero}', function (Request $request) {

//       $nome = $request->get("nome");
//       $numero = $request->get("numero");

//       $contato = \App\Models\Contato::create([
//         'nome'         => $nome,
//         'numero' => $numero]);

//       return view('novo', compact('contato'));
// });