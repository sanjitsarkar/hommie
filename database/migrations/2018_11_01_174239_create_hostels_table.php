<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHostelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
     { // if(!Schema::hasTable('hostels'))
    //     {
        Schema::create('hostels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('location');
            $table->string('college');
            $table->integer('total');

            $table->integer('rating')->default('5');
            $table->integer('total_non_booked')->nullable();
            $table->text('desc')->nullable();
            $table->string('img')->nullable();
            $table->string('slug')->nullable();
            $table->timestamps();
        });
    //}
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hostels');
    }
}
