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
        Schema::create('discount_coupon', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->decimal('discount', 6, 2);
            $table->enum('type_discount', ['valor', 'qtd'])->default(0);
            $table->dateTime('validade');
            $table->enum('active', ['S', 'N'])->default('S');
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
