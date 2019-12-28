<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookedUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {  if(!Schema::hasTable('booked_users'))
        {
        Schema::create('booked_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->integer('phone');
            $table->string('college');
            $table->string('avatar');
            $table->string('class');
            $table->string('branch');
            $table->string('stream');
            $table->string('sem');
            $table->string('gender');
            $table->date('dob');
            $table->date('check_in');
            $table->date('check_out');
            $table->boolean('paid');
            $table->string('payment_type');
            $table->string('room_type');
            $table->string('room_no');
            $table->string('hostel_name');
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
        Schema::dropIfExists('booked_users');
    }
}
