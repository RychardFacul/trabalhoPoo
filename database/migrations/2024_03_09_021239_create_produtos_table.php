<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_categoria');
            $table->foreign('id_categoria')->references('id')->on('categorias'); //Determinando a coluna id_categoria como FK referenciando sua origem - PK/tabela
            $table->string('nome',100);
            $table->string('descricao');
            $table->date('validade');
            $table->decimal('valor',10,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
};
