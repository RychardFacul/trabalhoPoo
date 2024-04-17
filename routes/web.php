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
use Illuminate\Support\Facades\Auth;

/////
///// ROTAS ESTATICAS
/////

Route::get('/', function (){ return view('estaticas.homepage'); })->name('homepage');
Route::get('/cadastro', function (){ return view('auth.cadastro'); });
Route::get('/login', function (){ return view('auth.login'); });

// Route::get('/sobre', function (){ return view('estaticas.sobre'); });
// Route::get('/contatos', function (){ return view('estaticas.contatos'); }); // estas não são prioridade
// Route::get('/politicas', function (){ return view('estaticas.politicas'); });

/////
///// ROTAS DINAMICAS
/////

Route::get('/carrinho', [CarrinhoController::class, 'index'])->name('carrinho');

Route::get('/produtos', [ProdutosController::class, 'index'])->name('produtos');
Route::get('/produto/descricao/{id}', [ProdutosController::class, 'descricao'])->name('produtos.descricao');

Route::get('/compra/{prodId?}{carId?}', [CompraController::class, 'index']);
Route::post('/comprar', [CompraController::class, 'efetuarcompra'])->name('comprar')->middleware('auth');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/cadastro', [AuthController::class, 'cadastro'])->name('cadastro');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/carrinho', [AuthController::class, 'carrinho'])->name('carrinho');
Route::post('/produtos', [AuthController::class, 'produtos'])->name('produtos');

Route::get('/carrinho/deletar/{prodId}', [CarrinhoController::class, 'delDoCarrinho'])->name('delDoCarrinho');
Route::get('/carrinho/adicionar/{prodId}', [CarrinhoController::class, 'addAoCarrinho'])->name('addAoCarrinho');
Route::get('/carrinho/deletarAll/{prodId}', [CarrinhoController::class, 'delAllDoCarrinho'])->name('delAllDoCarrinho');

/////
///// ROTAS RESTRITAS
/////

Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias')->middleware('auth.nivel.acesso');
