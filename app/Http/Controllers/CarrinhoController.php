<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Vendas\Carrinho;
use Illuminate\Support\Facades\Auth;

class CarrinhoController extends Controller
{
    public function index() {
        if (!Auth::check()) {
            return redirect('/login');
        }

        $produtos = Carrinho::produtos(session()->get('cardId'));
        $subTotal = 0;

        foreach($produtos as $produto) {
            $subTotal += $produto['quantidade'] * $produto['valor'];
        }

        return view('carrinho', ['produtos' => $produtos, 'subTotal' => $subTotal]);
    }
    
    public function addAoCarrinho($prodId) {
        if (!Auth::check()) {
            return redirect('/login');
        }

        Carrinho::add(session()->get('cardId'), $prodId);
        
        return redirect()->back();
    }
}
