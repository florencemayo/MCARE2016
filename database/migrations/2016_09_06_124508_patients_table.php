<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('identification_code');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('gender');
            $table->date('birthdate');
            $table->string('mobile_number');
            $table->string('nextOfKin');
            $table->string('street_name');
            $table->string('district_name');
            $table->string('region_name');
            $table->string('country_name');
            $table->timestamps();
        });

        \Illuminate\Support\Facades\DB::table('patients')->insert([
            'identification_code'=>'100',
            'first_name' => 'Pipa',
            'middle_name' => '',
            'last_name' => 'Maji',
            'gender' => '',
            'birthdate' => '10/09/1990',
            'mobile_number' => '',
            'nextOfKin' => 'Jagi Beseni',
            'street_name' => 'Barabarani',
            'district_name' => 'Moshi',
            'region_name' => 'Kilimanjaro',
            'country_name' => 'Tanzania',
        ]);

        \Illuminate\Support\Facades\DB::table('patients')->insert([
            'identification_code'=>'100',
            'first_name' => 'Kibao',
            'middle_name' => '',
            'last_name' => 'Shule',
            'gender' => '',
            'birthdate' => '10/09/1990',
            'mobile_number' => '',
            'nextOfKin' => 'Jagi Beseni',
            'street_name' => 'Barabarani',
            'district_name' => 'Moshi',
            'region_name' => 'Kilimanjaro',
            'country_name' => 'Tanzania',
        ]);

        \Illuminate\Support\Facades\DB::table('patients')->insert([
            'identification_code'=>'101',
            'first_name' => 'Modem',
            'middle_name' => '',
            'last_name' => 'Voda',
            'gender' => '',
            'birthdate' => '10/09/1990',
            'mobile_number' => '',
            'nextOfKin' => 'Modem Tigo',
            'street_name' => 'Barabarani',
            'district_name' => 'Moshi',
            'region_name' => 'Kilimanjaro',
            'country_name' => 'Tanzania',
        ]);

        \Illuminate\Support\Facades\DB::table('patients')->insert([
            'identification_code'=>'102',
            'first_name' => 'Modem',
            'middle_name' => '',
            'last_name' => 'Airtel',
            'gender' => '',
            'birthdate' => '10/09/1990',
            'mobile_number' => '',
            'nextOfKin' => 'Modem Tigo',
            'street_name' => 'Barabarani',
            'district_name' => 'Moshi',
            'region_name' => 'Kilimanjaro',
            'country_name' => 'Tanzania',
        ]);

        \Illuminate\Support\Facades\DB::table('patients')->insert([
            'identification_code'=>'103',
            'first_name' => 'Modem',
            'middle_name' => '',
            'last_name' => 'Zantel',
            'gender' => '',
            'birthdate' => '10/09/1990',
            'mobile_number' => '',
            'nextOfKin' => 'Modem Tigo',
            'street_name' => 'Barabarani',
            'district_name' => 'Moshi',
            'region_name' => 'Kilimanjaro',
            'country_name' => 'Tanzania',
        ]);

        \Illuminate\Support\Facades\DB::table('patients')->insert([
            'identification_code'=>'104',
            'first_name' => 'Pipa',
            'middle_name' => '',
            'last_name' => 'Maji',
            'gender' => '',
            'birthdate' => '10/09/1990',
            'mobile_number' => '',
            'nextOfKin' => 'Jagi Beseni',
            'street_name' => 'Barabarani',
            'district_name' => 'Moshi',
            'region_name' => 'Kilimanjaro',
            'country_name' => 'Tanzania',
        ]);

        \Illuminate\Support\Facades\DB::table('patients')->insert([
            'identification_code'=>'105',
            'first_name' => 'Pipa',
            'middle_name' => '',
            'last_name' => 'Maji',
            'gender' => '',
            'birthdate' => '10/09/1990',
            'mobile_number' => '',
            'nextOfKin' => 'Jagi Beseni',
            'street_name' => 'Barabarani',
            'district_name' => 'Moshi',
            'region_name' => 'Kilimanjaro',
            'country_name' => 'Tanzania',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('patients');
    }
}
