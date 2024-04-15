<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Vendas\Carrinho_Produtos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarrinhoController extends Controller
{
    public function index() {
        
    }
    
    public function addAoCarrinho($id) {
        if (Auth::check()) {
            return redirect('/login');
        }

        if (Carrinho_Produtos::where('fk_produto_id', $id)) {
            $CP = Carrinho_Produtos::find($id);
            if ($CP) {
                $CP->quantidade += 1;
                $CP->save();
            }
        }
        else {
            Carrinho_Produtos::create([
                'fk_carrinho_id' => session('carId'),
                'fk_produto_id' => $id,
            ]);
        }
        
        return redirect()->back();
    }
}
