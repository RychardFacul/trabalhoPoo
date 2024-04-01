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
        return view('categorias.lista', compact('categorias'));
    }

    
    public function create()
    {
        return view('categorias.novo');
    }


    public function store(Request $request)
    {
        //
    }


    public function show(string $id)
    {
        //
    }

  
    public function edit(string $id)
    {
        return view('categorias.editar');
    }

   
    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        return view('categorias.apagar');
    }
}
