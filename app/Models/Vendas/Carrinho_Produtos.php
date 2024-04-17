<?php

namespace App\Models\Vendas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrinho_Produtos extends Model
{
    use HasFactory;

    protected $table = "carrinhos_produtos";

    protected $primaryKey = "id";

    protected $fillable = ['fk_produto_id', 'fk_carrinho_id', 'check', 'quantidade'];

    public function produtos() {
        return $this->belongsTo(Produto::class, 'fk_produto_id');
    }
}
