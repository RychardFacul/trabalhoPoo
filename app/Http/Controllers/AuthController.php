<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function cadastro() {
        return view('auth.cadastro');
    }

    public function login() {
        return view('auth.login');
    } 
}
