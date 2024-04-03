<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index($q = null) {
        $listaProdutos = [];
        // quando $q foi diferente de null, ele é o filtro da consolta dos produtos
        return view('produtos.lista', ['listraprodutos' => $listaProdutos]);
    }

    public function descricao($id) {
        // passar infomações do produto com base no $id
        return view('produtos.descricao', ['produto' => []]);
    }
}
