<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'price',
        'assessment',
        'description',
        'sales_quantity',
    ];

    /* Querys (funções) que precisam ser feitas - (((Gabriel))) */

    // 1 - Função para pegar valores da tabela products
    //
    //     retorna todos os valores da tabela products
    //     ou a quantidade que é passada como parametro
    //     O PARAMETRO DEVE SER OPCIONAL

    // 2 - Função para pegar os valores por ordem de avalização
    //
    //     Ela tera um parametro obrigatorio, a quantidade de 
    //     linhas(valores) que serão retornados, e o segundo opcional,
    //     se vai ser decrecente ou crecente.

    // 3 - Função para pegar valores por preço
    //  
    //     Primeiro parametro se vai ser decrecente ou crecente
    //     Segundo parametro, opcional, valor minimo
    //     Terceiro parametro, opcional, valor máximo
}
