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

            $table->foreignId('fk_usuario_id')->nullable();
            $table->foreign('fk_usuario_id')->references('id')->on('users');

            $table->string('rua', 50);
            $table->string('numero', );
            $table->string('complemento', 50)->nullable();
            $table->string('bairo', 50);
            $table->string('cidade', 50);
            $table->string('estado', 2);
            $table->string('cep', 8);
            
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
