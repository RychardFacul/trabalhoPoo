<?php

namespace App\Http\Controllers;
use App\Models\Vendas\Categoria;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
  
    public function index()
    {
        $categorias = Categoria::all();
        return view('categorias', compact('categorias'));
    }

    
    public function create()
    {
        //
    }

    public function destroy()
    {
        //
    }
}
