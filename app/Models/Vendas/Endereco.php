<?php

namespace App\Models\Vendas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $table = "enderecos";

    protected $primaryKey = "id";

    protected $fillable = ['rua', 'numero', 'complemento', 'bairo', 'cidade', 'estado', 'cep'];
}
