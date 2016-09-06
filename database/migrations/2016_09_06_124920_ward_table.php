<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ward', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ward_name');
            $table->integer('clinic_id')->unsigned();
            $table->integer('department_id')->unsigned();
            $table->integer('number_of_beds');
            $table->foreign('clinic_id')->references('id')->on('clinics');
            $table->foreign('department_id')->references('id')->on('departments');
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
        Schema::drop('ward');
    }
}
