<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Bcrypt;
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

        $usuario = User::create([
            'name' => $validacao['nome'],
            'email' => $validacao['email'],
            'telefone' => $validacao['telefone'],
            'documento' => $validacao['documento'],
            'password' => bcrypt($validacao['senha']),
        ]); 

        Auth::login($usuario);
        
        return redirect()->route('homepage');
    }

    public function login(Request $request) {
        $senha = $request->input('senha');
        $email = $request->input('email');
        $check = User::where('email', $email)->pluck('password')->toArray();
        if(Auth::attempt(['email' => $email]) ){
            if(Hash::check($senha, $check[0])){
                return redirect()->route('homepage');
            }
        }else{
            return view('auth.cadastro'); 
        }
    } 

    public function logout() {
        Auth::logout();

        return redirect()->route('homepage');
    }
}
