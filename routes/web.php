<?php

use Illuminate\Support\Facades\Route;

// ROTAS ESTATICAS

Route::get('/', function () { // homepage
    return view('homepage');
});

Route::get('/contacts', function() { // informações sobre quem fez o site, likedin, github, ...
    return view('contacts');
}); 

// ROTAS DINAMICAS

Route::get('/products/{q?}', 'ProductsController@index');
Route::get('/cart_products', 'CartProductsController@index');
