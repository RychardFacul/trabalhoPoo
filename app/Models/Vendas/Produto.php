<?php

namespace App\Models\Vendas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $table = "produtos";
    
    protected $primaryKey = "id";
    protected $fillable = [
        'fk_categoria_id',
        'nome',
        'marca',
        'descricao',
        'valor',
        'estoque'
    ];
}
