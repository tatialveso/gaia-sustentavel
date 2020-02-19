<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidoProdutos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_produtos', function(Blueprint $table) {
            $table->increments('id');
            $table->decimal('price', 6, 2)->default(0);
            $table->enum('status', ['RE', 'PA', 'CA']); // Resevado, pago, cancelado.
            $table->decimal('discount', 6, 2)->default(0);
            $table->integer('discount_coupon_id')->nulable()->unsigned();
            $table->timestamps();
            $table->integer('request_id')->unsigned(); //unsigned=somente inteiros positivos.
            $table->integer('product_id')->unsigned();
            $table->integer('store_name');
           

        });

        Schema::table('pedido_produtos', function(Blueprint $table) {
            $table->foreign('request_id')->references('id')->on('requests');
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('discount_coupon_id')->references('id')->on('discount_coupon');
            $table->foreign('store_name')->references('name')->on('stores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
