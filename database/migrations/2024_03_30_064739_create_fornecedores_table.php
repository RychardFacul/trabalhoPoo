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
        Schema::create('fornecedores', function (Blueprint $table) {
            $table->id();

            $table->foreignId('fk_endereco_id');
            $table->foreign('fk_endereco_id')->references('id')->on('endereco');

            $table->string('razao_social', 50);
            $table->string('email', 50);
            $table->string('telefone', 16);
            $table->string('documento', 14);
            $table->date('abertura');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fornecedores');
    }
};
