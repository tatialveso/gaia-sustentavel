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
            $table->bigInteger('request_id')->unsigned(); // unsigned: somente inteiros positivos  
            $table->bigInteger('product_id')->unsigned();  // unsigned: somente inteiros positivos  
            $table->bigInteger('discount_coupon_id')->nullable()->unsigned(); // unsigned: somente inteiros positivos  
            $table->enum('status', ['RE', 'PA', 'CA']); // Reservado, Pago, Cancelado  
            $table->decimal('price', 6, 2)->default(0);  
            $table->decimal('discount', 6, 2)->default(0);  
            $table->timestamps();  

        });
        
        Schema::table('pedido_produtos', function(Blueprint $table) {
            $table->foreign('product_id')->references('id')->on('products');  
            $table->foreign('request_id')->references('id')->on('requests');  
            $table->foreign('discount_coupon_id')->references('id')->on('discounts_coupon');     
        });  
}




    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido_produtos');
    }
}
