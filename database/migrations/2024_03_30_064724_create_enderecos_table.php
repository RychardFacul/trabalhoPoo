<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id();

            $table->foreignId('fk_Usuarios_ID');
            $table->foreign('fk_Usuarios_ID')->references('id')->on('usuarios');

            $table->string('Rua', 50);
            $table->string('Numero', );
            $table->string('Complemento', 50);
            $table->string('Bairo', 50);
            $table->string('Cidade', 50);
            $table->string('Estado', 2);
            $table->string('CEP', 8);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enderecos');
    }
};
