<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ufs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('state');
        });

        DB::insert('insert into ufs (state) values (?)', ['AC']);
        DB::insert('insert into ufs (state) values (?)', ['AL']);
        DB::insert('insert into ufs (state) values (?)', ['AM']);
        DB::insert('insert into ufs (state) values (?)', ['AP']);
        DB::insert('insert into ufs (state) values (?)', ['BA']);
        DB::insert('insert into ufs (state) values (?)', ['CE']);
        DB::insert('insert into ufs (state) values (?)', ['DF']);
        DB::insert('insert into ufs (state) values (?)', ['ES']);
        DB::insert('insert into ufs (state) values (?)', ['GO']);
        DB::insert('insert into ufs (state) values (?)', ['MA']);
        DB::insert('insert into ufs (state) values (?)', ['MG']);
        DB::insert('insert into ufs (state) values (?)', ['MS']);
        DB::insert('insert into ufs (state) values (?)', ['MT']);
        DB::insert('insert into ufs (state) values (?)', ['PA']);
        DB::insert('insert into ufs (state) values (?)', ['PB']);
        DB::insert('insert into ufs (state) values (?)', ['PE']);
        DB::insert('insert into ufs (state) values (?)', ['PI']);
        DB::insert('insert into ufs (state) values (?)', ['PR']);
        DB::insert('insert into ufs (state) values (?)', ['RJ']);
        DB::insert('insert into ufs (state) values (?)', ['RN']);
        DB::insert('insert into ufs (state) values (?)', ['RO']);
        DB::insert('insert into ufs (state) values (?)', ['RR']);
        DB::insert('insert into ufs (state) values (?)', ['RS']);
        DB::insert('insert into ufs (state) values (?)', ['SC']);
        DB::insert('insert into ufs (state) values (?)', ['SE']);
        DB::insert('insert into ufs (state) values (?)', ['SP']);
        DB::insert('insert into ufs (state) values (?)', ['TO']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ufs');
    }
}