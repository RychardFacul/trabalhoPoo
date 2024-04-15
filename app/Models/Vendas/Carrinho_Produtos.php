<?php

namespace App\Models\Vendas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrinho_Produtos extends Model
{
    use HasFactory;

    protected $table = "carrinhos_produtos";

    protected $primaryKey = "id";

    protected $fillable = ['fk_endereco_id', 'fk_carrinho_id', 'check', 'quantidade'];
}
