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
        Schema::create('prod_venda', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('id_produto');
            $table->foreign('id_produto')->references('id')->on('produtos');

            $table->foreignId('id_venda');
            $table->foreign('id_venda')->references('id')->on('vendas');

            $table->decimal('quantidade',10,2);
            $table->decimal('total',10,2);
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
        Schema::dropIfExists('prod_venda');
    }
};
