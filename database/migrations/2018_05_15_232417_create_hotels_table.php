<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('star');
            $table->integer('price');
            $table->string('img');
            $table->longText('description');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('web_address');
            $table->date('date');
            $table->integer('number_people');
            $table->integer('hotel_class');
            $table->integer('cable_tv');
            $table->integer('telephone_service');
            $table->integer('room_service');
            $table->integer('cancellation');
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
        Schema::dropIfExists('hotels');
    }
}
