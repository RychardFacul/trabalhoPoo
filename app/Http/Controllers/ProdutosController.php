<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index() {
        // os produtos terão uma interação diferente caso sejam acessados pelo gerente
        // eles poderação ser apagados, passe uma variavel identificando se pode ser apagado
        // ou não para produtos
        
        return view('produtos');
    }
}
