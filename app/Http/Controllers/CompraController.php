<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Vendas\Carrinho;
use App\Models\Vendas\Produto;
use App\Models\Vendas\Venda;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    public function index($prodId = null) {
        $userId = session()->get('userId');
        $vendId = Venda::create([
            'form_pagamento' => 0,
            'status' => 'i',
        ])['id'];

        if ($prodId) {
            Venda::addProduto($userId, $vendId, $prodId, 1);
            return view('compra', [
                'vendId' => $vendId, 
                'produto' => Produto::find($prodId)->toArray()
            ]);
        }

        $produtos = Carrinho::produtos(session()->get('cardId'));
        $total = 0;
        
        foreach($produtos as $produto) {
            Venda::addProduto($userId, $vendId, $produto['id'], $produto['quantidade']);
            $total += (float) $produto['quantidade'] * $produto['valor'];
        }

        return view('compra', [
            'vendId' => $vendId,
            'produtos' => $produtos, 
            'total' => $total,
        ]);
    }

    public function efetuarcompra(Request $request, $vendId = null) {
        Venda::comprar($vendId, $request->input('forma_pagamento'));
    }
}
