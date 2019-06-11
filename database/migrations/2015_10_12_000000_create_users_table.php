<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('users_id');
            $table->string('name');
            $table->string('last_name')->nullable();
            $table->string('cpf')->nullable();
            $table->string('username')->nullable();
            $table->string('email');
            $table->integer('sexes_id')->unsigned();
            $table->integer('cities_id')->unsigned();
            $table->integer('states_id')->unsigned();
            $table->integer('countries_id')->unsigned();
            $table->string('password');
            $table->date('birthday');
            $table->string('zip_code')->nullable();
            $table->string('address')->nullable();
            $table->string('number')->nullable();
            $table->string('address_complement')->nullable();
            $table->string('district')->nullable();
            $table->string('cellphone')->nullable();
            $table->string('cellphone_emergency')->nullable();
            $table->string('team')->nullable();
            $table->string('nickname')->nullable();
            $table->integer('status')->unsigned();
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
