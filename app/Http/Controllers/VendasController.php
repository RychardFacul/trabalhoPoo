<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VendasController extends Controller
{
    public function editar() {
        return view('vendas.editar');
    }

    public function apagar() {
        return view('vendas.apagar');
    }
    
    public function lista() {
        return view('vendas.lista');
    }

    public function novo() {
        return view('vendas.novo');
    }
}
