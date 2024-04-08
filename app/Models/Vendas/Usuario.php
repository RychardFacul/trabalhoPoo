<?php

namespace App\Models\Vendas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'tipo',
        'nome',
        'email',
        'telefone',
        'documento',
        'senha',
        'nascimento',
    ];

    protected $hidden = [
        'senha',
    ];

    protected $casts = [
        'nascimento' => 'date',
    ];
}
