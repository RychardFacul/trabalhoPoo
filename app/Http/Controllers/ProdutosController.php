<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function editar() {
        return view('produtos.editar');
    }

    public function apagar() {
        return view('produtos.apagar');
    }
    
    public function lista() {
        return view('produtos.lista');
    }

    public function novo() {
        return view('produtos.novo');
    }
}
