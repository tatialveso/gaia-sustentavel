<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeingkeysCreate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::table('pedidos', function (Blueprint $table) {
            $table->foreign('pagamento_id')->references('id')->on('pagamentos');
            $table->foreign('rastreamento_id')->references('id')->on('rastreamentos');
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
