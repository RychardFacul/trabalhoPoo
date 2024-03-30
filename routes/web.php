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

Route::get('/', function () {
    return view('index');
});

Route::get('/', function () {
    return view('categorias.lista');
})->name('categorias');

Route::get('/produtos', function () {
    return view('produtos.lista');
})->name('produtos');

Route::get('/clientes', function () {
    return view('clientes.lista');
})->name('clientes');

Route::get('/vendas', function () {
    return view('vendas.lista');
})->name('vendas');

Route::get('/produto/novo', function () {
    return view('produtos.novo');
});

Route::get('/venda/novo', function () {
    return view('vendas.novo');
});

Route::get('/cliente/novo', function () {
    return view('clientes.novo');
});

Route::get('/categoria/novo', function () {
    return view('categorias.novo');
});