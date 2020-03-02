<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('cpf', 11)->nullable();
            $table->string('address')->nullable();
            $table->integer('number')->nullable();
            $table->string('complement')->nullable();
            $table->string('neighbourhood')->nullable();
            $table->string('city')->nullable();
            $table->bigInteger('uf_id')->nullable();
            $table->string('cep', 8)->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
