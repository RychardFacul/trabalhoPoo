<?php

namespace App\Models\Vendas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = "itens";

    protected $primaryKey = "id";

    protected $fillable = ['fk_usuario_id','fk_produto_id','fk_venda_id','quantidade'];
}
