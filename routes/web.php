<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AuthController,
    CarrinhoController,
    CategoriaController,
    ClientesController,
    CompraController,
    ProdutosController,
    VendasController
};

/////
///// ROTAS ESTATICAS
/////

Route::get('/', function (){ return view('estaticas.homepage'); })->name('homepage');
Route::get('/cadastro', function (){ return view('auth.cadastro'); })->name('cadastro');
Route::get('/login', function (){ return view('auth.login'); })->name('login');

// Route::get('/sobre', function (){ return view('estaticas.sobre'); });
// Route::get('/contatos', function (){ return view('estaticas.contatos'); }); // estas não são prioridade
// Route::get('/politicas', function (){ return view('estaticas.politicas'); });

/////
///// ROTAS DINAMICAS
/////

Route::get('/carrinho', [CarrinhoController::class, 'index'])->name('carrinho');

Route::get('/produtos/{q?}', [ProdutosController::class, 'index'])->name('produtos');
Route::get('/produtos/descricao/{id}', [ProdutosController::class, 'descricao'])->name('produtos.descricao');

Route::get('/compra/{prodId?}{carId?}', [CompraController::class, 'index'])->name('compra')->middleware('auth');
Route::post('/comprar/{prodId?}{cardId?}', [CompraController::class, 'efetuarcompra'])->name('comprar')->middleware('auth');

Route::post('/cadastro', [AuthController::class, 'cadastro'])->name('cadastro.efetuar');
Route::post('/login', [AuthController::class, 'login'])->name('login.efetuar');

/////
///// ROTAS RESTRITAS
/////

Route::get('/vendas', [VendasController::class, 'index'])->name('vendas')->middleware('auth.nivel.acesso');
Route::get('/clientes', [ClientesController::class, 'index'])->name('clientes')->middleware('auth.nivel.acesso');
Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias')->middleware('auth.nivel.acesso');
