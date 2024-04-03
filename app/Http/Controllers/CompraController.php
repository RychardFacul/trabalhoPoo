<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class CompraController extends Controller
{
    public function index($cardId = null, $prodId = null) {
        if (isNull($cardId) && isNull($prodId)) {
            return redirect()->route('produtos');
        }

        /**
         * Informações do produtos ou produtos
         * 
         * Caso tenha cardId tem que passar todas as informações de cada produto para a view
         * Caso tenha prodId tem que passar todas as informações do produto
         * Se por algum motivo tenha os dois, considere que só tem o cardId
         * 
         * em ambos os casos passe como um array de nome produtos
         */

        return view('compra', ['produtos' => []]);
    }
}
