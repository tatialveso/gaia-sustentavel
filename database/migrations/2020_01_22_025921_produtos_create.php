<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProdutosCreate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->decimal('price', 4, 2);
            $table->string('description');
            $table->string('composition');
            $table->bigInteger('store_id');
            $table->bigInteger('category_id');
            $table->bigInteger('subcategory_id');
            $table->string('img_product');
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
        //
    }
}
