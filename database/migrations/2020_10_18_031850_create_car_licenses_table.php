<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarLicensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_licenses', function (Blueprint $table) {
            $table->id();
            $table->text('number');
            $table->text('chassis_number');
            $table->unsignedInteger('type');
            $table->text('company');
            $table->text('color');
            $table->text('fuel');
            $table->text('date_created');
            $table->text('date_expired');
            $table->foreignId('citizen_id')->references('id')->on('citizens');
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
        Schema::dropIfExists('car_licenses');
    }
}
