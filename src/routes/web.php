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
  echo App\Http\Controllers\ContatoController::index();
});

// TALVEZ ISSO AJUDE A ENTENDER CONCEITOS
// $post = App\Models\Contato::find(1);
// echo url("/posts/{$post->id}");
