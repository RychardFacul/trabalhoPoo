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
        Schema::create('carrinhos_produtos', function (Blueprint $table) {
            $table->id();

            $table->foreignId('fk_produto_id');
            $table->foreign('fk_produto_id')->references('id')->on('produtos');

            $table->foreignId('fk_carrinho_id');
            $table->foreign('fk_carrinho_id')->references('id')->on('carrinhos');

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
        Schema::dropIfExists('carrinhos_produtos');
    }
};
