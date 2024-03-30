<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CadastroDeForncedorController extends Controller
{
    public function index() {
        return view('cadastro_de_fornecedor');
    }
}
