<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterPedidoProdutoRefactor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
        Schema::table('pedido_produtos', function(Blueprint $table) {
            $table->dropForeign(['discount_coupon_id']);
            $table->bigInteger('quantity');  
            $table->dropColumn('discount_coupon_id');  
            $table->dropColumn('status');  
            $table->dropColumn('price');  
            $table->dropColumn('discount');  
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
