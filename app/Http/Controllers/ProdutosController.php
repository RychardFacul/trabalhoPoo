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
    
    public function index() {
        return view('produtos.apresentar');
    }

    public function novo() {
        return view('produtos.novo');
    }
}
