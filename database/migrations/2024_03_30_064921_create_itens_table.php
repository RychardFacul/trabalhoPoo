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
        Schema::create('itens', function (Blueprint $table) {
            $table->id();

            $table->foreignId('fk_usuarios_id');
            $table->foreign('fk_usuarios_id')->references('id')->on('usuarios');

            $table->foreignId('fk_produtos_id');
            $table->foreign('fk_produtos_id')->references('id')->on('produtos');

            $table->foreignId('fk_vendas_id')->nullable();
            $table->foreign('fk_vendas_id')->references('id')->on('vendas');

            $table->decimal('quantidade', 10, 3);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itens');
    }
};
