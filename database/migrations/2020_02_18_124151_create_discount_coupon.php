<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscountCoupon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discounts_coupon', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->decimal('discount', 6, 2);
            $table->decimal('limit', 6, 2)->default(0);  
            $table->enum('type_limit', ['price', 'qtd'])->default('qtd');
            $table->dateTime('validade');
            $table->enum('active', ['S', 'N'])->default('S');
            $table->string('localizador')->unique();  
            $table->enum('type_discount', ['price', 'porc'])->default('porc');  
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
        Schema::dropIfExists('discount_coupon');
    }
}
