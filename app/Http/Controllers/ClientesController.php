<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function editar() {

        return view('usuarios.editar');
    }

    public function apagar() {
        return view('usuarios.apagar');
    }
    
    public function lista() {
        return view('usuarios.lista');
    }

    public function novo() {
        return view('usuarios.novo');
    }
}
