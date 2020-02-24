<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SubcategoriasCreate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcategories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('category_id');
        });

        DB::insert('insert into subcategories (name,category_id) values (?, ?)', ['Cabelo', 1]);
        DB::insert('insert into subcategories (name,category_id) values (?, ?)', ['Rosto', 1]);
        DB::insert('insert into subcategories (name,category_id) values (?, ?)', ['Cosméticos', 1]);
        DB::insert('insert into subcategories (name,category_id) values (?, ?)', ['Corpo e Banho', 1]);
        DB::insert('insert into subcategories (name,category_id) values (?, ?)', ['Itens Pessoais', 1]);
        DB::insert('insert into subcategories (name,category_id) values (?, ?)', ['Limpeza Doméstica', 2]);
        DB::insert('insert into subcategories (name,category_id) values (?, ?)', ['Aromatizador', 2]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subcategories');
    }
}
