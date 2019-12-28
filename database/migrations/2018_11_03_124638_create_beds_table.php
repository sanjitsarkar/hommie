<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBedsTable extends Migration
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
            $table->string('student_name')->nullable();
            $table->integer('room_no')->nullable();
            $table->integer('bed_no')->nullable();
            $table->string('hostel_name')->nullable();
            $table->string('college_name')->nullable();
            $table->date('check_in_date')->nullable();
            $table->date('check_out_date')->nullable();
            $table->string('sem')->nullable();
            $table->string('branch')->nullable();
            $table->string('year')->nullable();
            $table->string('stream')->nullable();
            $table->integer('age')->nullable();
            $table->integer('facebook')->nullable();
            $table->integer('email')->nullable();
            $table->string('img')->nullable();
            $table->text('abt')->nullable();
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
        Schema::dropIfExists('beds');
    }
}
