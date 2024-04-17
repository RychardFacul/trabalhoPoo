<?php

namespace App\Models\Vendas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;

    protected $table = "vendas";

    protected $primaryKey = "id";

    protected $fillable = ['form_pagamento', 'status'];

    public static function addProduto($userId, $vendId, $prodId, $quantidade) {
        if (!$userId || !$vendId || !$prodId || !$quantidade) {
            return null;
        }

        return Item::create([
            "quantidade" => $quantidade,
            "fk_usuario_id" => $userId,
            "fk_produto_id" => $prodId,
            "fk_venda_id" => $vendId,
        ]);
    }

    public static function comprar($vendId = null, $formaPag = null) {
        if (!$formaPag || !$vendId) {
            return null;
        }

        $vd = Venda::find($vendId);
        $vd['form_pagamento'] = $formaPag;
        $vd['status'] = 'c';
    }
}
