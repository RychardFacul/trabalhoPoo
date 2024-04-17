<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Vendas\Venda;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class CompraController extends Controller
{
    public function index(Request $request, $prodId = null) {
        if ($prodId) {
            
        }
        else {
            $request->input('total');
        }

        return view('compra');
    }

    public function efetuarcompra(Request $request) {
        $itensIds = session('itensIds');
        $prods = session('produtos');
        session()->flush();

        if (isNull($itensIds)){
            // logica para ignorar caso seja nullo;
        }

        $formaPagamanto = $request->input('forma_pagamento');
        
        $vendaAtual = Venda::create([
            'form_pagamento' => $formaPagamanto, 
            'status' => 'a',
        ]);
    }
}
