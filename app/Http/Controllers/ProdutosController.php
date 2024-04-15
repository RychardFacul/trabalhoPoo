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
        
        foreach($produtos as $key => $produto) {
            $imagens[$key] = $produto['descricao'].'/'.explode(",", $produto["imagens"])[0];
        }

        return view('produtos.lista', ['produtos' => $produtos, 'imagens' => $imagens]);
    }

    public function descricao($id) {
        $produto = Produto::where('id', $id)->first();
        
        if ($produto){
            return view('produtos.descricao', ['produto' => $produto]);
        }

        return redirect('/produtos');
    }
}
