<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Vendas\Item;
use App\Models\Vendas\Produto;
use App\Models\Vendas\Venda;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class CompraController extends Controller
{
    public function index($userId = null, $prodId = null) {
        session()->forget(['produto', 'produtos']);

        if (!isNull($prodId)) {
            $prod = Produto::where('id', $prodId)->firstOrFail();
            
            session()->put('produto', $prod);
            return view('compra');
        }
        else if (!isNull($userId)) {
            $itensIds = Item::where('fk_user_id', $userId)->pluck('fk_produto_id')->toArray();
            $prods = Produto::whereIn('id', $itensIds)->get();
            
            session()->put('produtos', $prods);
            return view('compra');
        }
    }

    public function efetuarcompra(Request $request) {
        $prods = session('produtos');
        $prod = session('produto');
        session()->flush();

        if (!isNull($prod)) {
            Venda::create([
                
            ]);
        }
    }
}
