<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function cadastro(Request $request) {
        $nome = $request->input('nome');
        $telefone = $request->input('telefone');
        $endereco = $request->input('endereco');
        $email = $request->input('email');
        $cpf = $request->input('cpf');
        $senha = $request->input('senha');

        $cadastrado = false;
        // logica de incrementar no banco de dados

        if ($cadastrado) {

        }
        else {
            return view('auth.cadastro');
        }
    }

    public function login() {
        $logado = false;

        if ($logado){
            return view('auth.login');
        }
    } 
}
