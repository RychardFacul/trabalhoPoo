<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CadatroDeProdutoController extends Controller
{
    public function index () {
        return view('cadastro_de_produto');
    }
}
