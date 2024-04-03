<?php

namespace App\Models\Vendas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory;

    protected $table = "fornecedores";

    protected $primaryKey = "id";

    protected $fillable = ['fk_endereco_id', 'razao_social', 'email', 'telefone', 'documento', 
    'abertura'];
}
