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

/*
ROTA PRINCIPAL
Chamada no navador: 127.0.0.1:8000/
*/
Route::get('/', function () {
    return view('welcome');
});

/*
ROTA CONTATO
Chamada no navador: 127.0.0.1:8000/contato
*/
Route::get('/contato', function () {
    return view('contato');
});

/*
ROTA PRODUTO
Chamada no navador: 127.0.0.1:8000/produto
*/
Route::get('/produto', function () {
    return view('produto');
});
