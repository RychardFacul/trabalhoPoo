<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AuthController,
    CategoriaController,
    ClientesController,
    ProdutosController,
    VendasController
};

/////
///// ROTAS ESTATICAS
/////

Route::get('/', function (){ return view('estaticas.homepage'); })->name('homepage');

// Route::get('/sobre', function (){ return view('estaticas.sobre'); });
// Route::get('/contatos', function (){ return view('estaticas.contatos'); }); // estas não são prioridade
// Route::get('/politicas', function (){ return view('estaticas.politicas'); });

/////
///// ROTAS DINAMICAS
/////

Route::get('/produtos', [ProdutosController::class, 'index'])->name('produtos');
Route::get('/vendas', [VendasController::class, 'lista'])->name('vendas');
Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias');

// autentificacao
Route::get('/cadastro', [AuthController::class, 'apresentar']);
Route::post('/cadastro', [AuthController::class, 'cadastro'])->name('cadastro');

Route::get('/login', [AuthController::class, 'login'])->name('login');

/////
///// ROTAS RESTRITAS
/////

Route::get('/clientes', [ClientesController::class, 'lista'])->name('clientes')->middleware('auth.nivel.acesso');

Route::get('/produtos/novo', [ProdutosController::class, 'novo'])->middleware('auth.nivel.acesso');
Route::get('/vendas/novo', [VendasController::class, 'novo'])->middleware('auth.nivel.acesso');
Route::get('/categoria/novo', [CategoriaController::class, 'novo'])->middleware('auth.nivel.acesso');
Route::get('/clientes/novo', [ClientesController::class, 'novo']);
