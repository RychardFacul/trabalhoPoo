<?php

use Illuminate\Support\Facades\Route;

// PAGINAS ESTATICAS

Route::get('/', function () { // homepage
    return view('homepage');
});

Route::get('/contacts', function() { // informações sobre quem fez o site, likedin, github, ...
    return view('contacts');
}); 

// PAGINAS DINAMICAS

Route::get('/products/{q?}', 'ProductsController@index');
Route::get('/cart_products', 'CartProductsController@index');
