<?php

namespace App\Models\Vendas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{
    use HasFactory;

    protected $table = "carrinhos";

    protected $primaryKey = "id";

    protected $fillable = ['fk_usuario_id'];

    public static function add($cardId = null, $prodId = null) {
        if(!$cardId || !$prodId) {
            return null;
        }

        $CP = Carrinho_Produtos::where('fk_carrinho_id', $cardId)->where('fk_produto_id', $prodId)->first(); 

        if (!empty($CP)) {
            $CP['quantidade'] += 1;
            $CP->save();
            return $CP;
        }
        
        return Carrinho_Produtos::create([
            'fk_produto_id' => $prodId,
            'fk_carrinho_id' => $cardId,
        ]);
    }

    public static function del($cardId = null, $prodId = null) {
        if(!$cardId || !$prodId) {
            return null;
        }

        $CP = Carrinho_Produtos::where('fk_carrinho_id', $cardId)->where('fk_produto_id', $prodId)->first(); 

        if($CP['quantidade'] > 0){
            $CP['quantidade'] -= 1;
            $CP->save();
            return $CP;
        }

        $CP->delete();
        return 0;
    }

    public static function delAll($cardId = null, $prodId = null) {
        $CP = Carrinho_Produtos::where('fk_carrinho_id', $cardId)->where('fk_produto_id', $prodId)->first(); 

        if($CP) $CP->delete();
    }

    public static function produtos($cardId = null) {
        if(!$cardId) {
            return null;
        }

        $CPs = Carrinho_Produtos::where('fk_carrinho_id', $cardId)->get();
        $produtos = [];
        foreach($CPs as $key => $CP) {
            $p = $CP->produtos()->first()->toArray();
            $p['quantidade'] = $CP['quantidade'];
            $produtos[$key] = $p;
        }
        return $produtos;
    }
}
