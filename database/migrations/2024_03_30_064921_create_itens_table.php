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

            $table->foreignId('fk_usuario_id');
            $table->foreign('fk_usuario_id')->references('id')->on('usuarios');

            $table->foreignId('fk_produto_id');
            $table->foreign('fk_produto_id')->references('id')->on('produtos');

            $table->foreignId('fk_venda_id')->nullable();
            $table->foreign('fk_venda_id')->references('id')->on('vendas');

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
