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
        Schema::create('lotes', function (Blueprint $table) {
            $table->id();

            $table->foreignId('fk_fornecedores_id');
            $table->foreign('fk_fornecedores_id')->references('id')->on('fornecedores');

            $table->foreignId('fk_produtos_id');
            $table->foreign('fk_produtos_id')->references('id')->on('produtos');

            $table->string('descricao', 15);
            $table->decimal('quantidade', 10, 3);
            $table->decimal('valor_compra', 10, 2);
            $table->date('validade')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lotes');
    }
};
