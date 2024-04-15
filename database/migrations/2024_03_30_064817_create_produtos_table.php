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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();

            $table->foreignId('fk_categoria_id');
            $table->foreign('fk_categoria_id')->references('id')->on('categorias');

            $table->string('nome', 50);
            $table->string('marca', 50);
            $table->string('imagens', 500)->nullable();
            $table->string('descricao', 500);
            $table->string('descricao_detalhada', 500);
            $table->decimal('valor', 10, 2);
            $table->decimal('estoque', 10, 3);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
