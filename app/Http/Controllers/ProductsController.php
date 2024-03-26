<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index($q = null) {
        // realizar consulta no banco de dados para pegar o produto com as letras da query $q
        // e armazenar na variavel search
        $searchResult = null;
        return view('products', ['searchResult' => $searchResult]);
    }
}
