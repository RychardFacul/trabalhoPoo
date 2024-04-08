<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function editar() {
        return view('categorias.editar');
    }

    public function apagar() {
        return view('categorias.apagar');
    }
    
    public function lista() {
        return view('categorias.lista');
    }

    public function novo() {
        return view('categorias.novo');
    }
}
