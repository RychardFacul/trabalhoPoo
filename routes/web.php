<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    LoginController,
    CadastroController,
    ProdutosController,
    CadatroDeProdutoController,
    CadastroDeForncedorController
};

// PAGINAS ESTATICAS

Route::get('/', function () { return view('homepage'); });
Route::get('/contatos', function () { return view('contatos'); });

// PAGINAS DINAMICAS DE ACESSO GLOBAL

Route::get('/login', [LoginController::class, 'index']);
Route::get('/cadastro', [CadastroController::class, 'index']);
Route::get('/produtos', [ProdutosController::class, 'index']);

// PAGINAS DINAMICAS DE ACESSO RESTRITO

Route::get('/cadastro_de_produtos', [CadatroDeProdutoController::class, 'index'])->middleware('verificar.acesso.ger');
Route::get('/cadastro_de_forncedores', [CadastroDeForncedorController::class, 'index'])->middleware('verificar.acesso.ger');    