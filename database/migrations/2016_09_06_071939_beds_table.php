<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beds', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bed_size');
            $table->string('bed_type');
            $table->string('bed_class');
            $table->integer('bed_charge');
            $table->integer('ward_id')->unsigned();
            $table->integer('clinic_id')->unsigned();
            $table->integer('department_id')->unsigned();
            $table->foreign('clinic_id')->references('id')->on('clinics');
            $table->foreign('department_id')->references('id')->on('departments');
            $table->foreign('ward_id')->references('id')->on('ward');
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
        Schema::drop('beds');
    }
}
