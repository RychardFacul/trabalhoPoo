<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Vendas\Carrinho;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function cadastro(Request $request) {
        $validacao = $request->validate([
            'nome' => 'required|string|max:50',
            'email' => 'required|string|email|max:50|unique:users,email',
            'telefone' => 'required|string|max:16',
            'documento' => 'required|string|max:14',
            'senha' => 'required|string|min:8|confirmed',
        ]);

        $usuario = User::create([
            'name' => $validacao['nome'],
            'email' => $validacao['email'],
            'telefone' => $validacao['telefone'],
            'documento' => $validacao['documento'],
            'password' => Hash::make($validacao['senha']),
        ]); 

        $carrinho = Carrinho::create([
            'fk_usuario_id' => $usuario['id'],
        ]);

        Auth::login($usuario);
        session()->put('userId', $usuario['id']);
        session()->put('cardId', $carrinho['id']);
        
        return redirect()->route('homepage');
    }
    
    public function login(Request $request) {
        $validacao = $request->validate([
            'email' => 'required|string|email',
            'senha' => 'required|string',
        ]);
        
        $email = $validacao['email'];
        $senha = $validacao['senha'];
        
        $usuario = User::where('email', $email)->first();
        
        if ($usuario && Hash::check($senha, $usuario->password)) {
            Auth::login($usuario);

            $carrinho = Carrinho::where('fk_usuario_id', $usuario['id'])->first();
    
            session()->put('cardId', $carrinho['id']);
            session()->put('userId', $usuario['id']);
            
            return redirect()->route('homepage');
        } else {
            return redirect('/login')->with('LoginError', 'Erro ao tentar realizar o login');
        }
    } 
    
    public function logout() {
        Auth::logout();
        session()->flush();
        
        return redirect()->route('homepage');
    }
}
