<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Vendas\Carrinho;
use Illuminate\Support\Facades\Auth;

class CarrinhoController extends Controller
{
    public function index() {
        if (!Auth::check()) {
            return redirect('/login')->with('LoginError', '[ERRO]: Você deve estar logado para acessar o carrinho de compras');
        }

        $produtos = Carrinho::produtos(session()->get('cardId'));
        $subTotal = 0;

        foreach($produtos as $key => $produto) {
            $produtos[$key]['imagens'] = $produto['descricao'].'/'.explode(',',$produto['imagens'])[0];
            $subTotal += $produto['quantidade'] * $produto['valor'];
        }

        return view('carrinho', ['produtos' => $produtos, 'subTotal' => intval($subTotal)]);
    }
    
    public function addAoCarrinho($prodId) {
        if (!Auth::check()) {
            return redirect('/login')->with('LoginError', '[ERRO]: Você deve estar logado para acrescentar o carrinho de compras');
        }

        Carrinho::add(session()->get('cardId'), $prodId);
        
        return redirect()->back();
    }
}
