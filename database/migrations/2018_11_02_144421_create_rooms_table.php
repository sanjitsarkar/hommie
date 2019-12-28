<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { if(!Schema::hasTable('rooms'))
        {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hostel_name');
            $table->string('room_no')->nullable();
            $table->integer('total_bed')->nullable();
            $table->integer('booked_bed')->nullable();
            $table->string('room_type')->nullable();
            $table->string('img')->nullable();
            $table->boolean('booked')->nullable();
            $table->timestamps();
        });
    }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
