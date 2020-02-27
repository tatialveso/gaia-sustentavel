<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
        });

        DB::insert('insert into topics (title) values (?)', ['Dúvidas sobre a Gaia']);
        DB::insert('insert into topics (title) values (?)', ['Reportar abuso']);
        DB::insert('insert into topics (title) values (?)', ['Dúvidas sobre vendas e/ou compras']);
        DB::insert('insert into topics (title) values (?)', ['Outros assuntos']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('topics');
    }
}
