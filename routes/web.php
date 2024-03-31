<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AuthController,
    CategoriasController,
    ClientesController,
    ProdutosController,
    VendasController
};

/////
///// ROTAS ESTATICAS
/////

Route::get('/', function (){ return view('estaticas.homepage'); });

// Route::get('/sobre', function (){ return view('estaticas.sobre'); });
// Route::get('/contatos', function (){ return view('estaticas.contatos'); }); // estas não são prioridade
// Route::get('/politicas', function (){ return view('estaticas.politicas'); });

/////
///// ROTAS DINAMICAS
/////

Route::get('/produtos', [ProdutosController::class, 'lista'])->name('produtos');
Route::get('/vendas', [VendasController::class, 'lista'])->name('vendas');
Route::get('/categorias', [CategoriasController::class, 'lista'])->name('categorias');

// autentificacao
Route::get('/cadastro', [AuthController::class, 'cadastro'])->name('cadastro');
Route::get('/login', [AuthController::class, 'login'])->name('login');

/////
///// ROTAS RESTRITAS
/////

Route::get('/clientes', [ClientesController::class, 'lista'])->name('clientes')->middleware('auth.nivel.acesso');

Route::get('/produtos/novo', [ProdutosController::class, 'novo'])->middleware('auth.nivel.acesso');
Route::get('/vendas/novo', [VendasController::class, 'novo'])->middleware('auth.nivel.acesso');
Route::get('/categoria/novo', [CategoriasController::class, 'novo'])->middleware('auth.nivel.acesso');
Route::get('/clientes/novo', [ClientesController::class, 'novo']);
