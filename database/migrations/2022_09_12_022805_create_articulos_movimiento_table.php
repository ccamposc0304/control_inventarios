<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticulosMovimientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos_movimiento', function (Blueprint $table) {
            $table->increments("id");

            $table->integer('product_id')->unsigned();
            $table->integer('movimientos_id')->unsigned();

            $table->foreign("product_id")->references("id")->on("products");
            
            $table->foreign("movimientos_id")->references("id")->on("movimientos");

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
        Schema::dropIfExists('articulos_movimiento');
    }
}
