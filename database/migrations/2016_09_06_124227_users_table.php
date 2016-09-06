<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('role');
            $table->string('gender');
            $table->date('date_birth');
            $table->string('mobile_number');
            $table->string('street_name');
            $table->string('district_name');
            $table->string('region_name');
            $table->string('country_name');
            //$table->string('address_code')->unsigned();
            $table->string('user_name')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            //$table->foreign('address_code')->references('id')->on('address');
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
        Schema::drop('users');
    }
}
