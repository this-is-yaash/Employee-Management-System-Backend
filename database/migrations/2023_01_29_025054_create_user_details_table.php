<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->string('employee_name'); //varchar(255)
            $table->string('email');         //varchar(255)
            $table->string('designation');   //varchar(255)
            $table->string('phone_number');  //int(10)
            $table->string('salary');        //int(10)
            $table->string('age');           //int(2)
            $table->string('dob');           //varchar(255)
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
        Schema::dropIfExists('user_details');
    }
};
