<?php

namespace App\Models\Vendas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lote extends Model
{
    use HasFactory;

    protected $table = "lotes";

    protected $primaryKey = "id";

    protected $fillable = ['fk_fornecedor_id', 'fk_produto_id', 'descricao', 'quantidade', 'valor_compra',
     'validade'];
}
