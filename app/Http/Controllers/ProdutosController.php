<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Vendas\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(Request $request) {  
        $q = $request->input('q');

        $produtos = $q  
            ? Produto::where('nome', 'like', '%'.trim($q).'%')->paginate(9)
            : Produto::paginate(9);
        
        return view('produtos.lista', ['produtos' => $produtos]);
    }

    public function descricao($id) {
        // passar infomações do produto com base no $id
        return view('produtos.descricao', ['produto' => []]);
    }
}
