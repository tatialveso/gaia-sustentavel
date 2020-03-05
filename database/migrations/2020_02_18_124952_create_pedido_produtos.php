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
            $table->BigIncrements('id');  
            $table->bigInteger('request_id')->unsigned();
            $table->bigInteger('product_id')->unsigned();
            $table->integer('quantity');
            $table->timestamps();  

        });
        
        Schema::table('pedido_produtos', function(Blueprint $table) {
            $table->foreign('request_id')->references('id')->on('requests');    
            $table->foreign('product_id')->references('id')->on('products');  
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
