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
}
