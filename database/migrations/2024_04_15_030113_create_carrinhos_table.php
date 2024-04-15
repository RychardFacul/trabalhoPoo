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
        Schema::create('carrinhos', function (Blueprint $table) {
            $table->id();

            $table->foreignId('fk_usuario_id');
            $table->foreign('fk_usuario_id')->references('id')->on('users');

            $table->foreignId('fk_produto_id');
            $table->foreign('fk_produto_id')->references('id')->on('produtos');

            $table->decimal('quantidade', 10, 3);

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
        Schema::dropIfExists('carrinhos');
    }
};
