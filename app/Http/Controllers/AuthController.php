<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Vendas\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function cadastro(Request $request) {
        $validacao = $request->validate([
            'nome' => 'required|string|max:50',
            'email' => 'required|string|email|max:50|unique:usuarios,email',
            'telefone' => 'required|string|max:16',
            'documento' => 'required|string|max:14',
            'senha' => 'required|string|min:8|confirmed',
        ]);

        $usuario = Usuario::create([
            'nome' => $validacao['nome'],
            'email' => $validacao['email'],
            'telefone' => $validacao['telefone'],
            'documento' => $validacao['documento'],
            'senha' => Hash::make($validacao['senha']),
        ]); 

        Auth::login($usuario);
        
        return redirect()->route('homepage');
    }

    public function login(Request $request) {
        $email = $request->input('email');
        $senha = $request->input('senha');
        $hashed = Hash::make($senha);
        if (Auth::attempt(['email' => $email, 'senha' => $hashed])) {
            return view('auth.cadastro');
        }else{
            return "usuario n existe";
        }
        
        
    } 

    public function logout() {
        Auth::logout();

        return redirect()->route('homepage');
    }
}
