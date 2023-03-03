<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('user_info',function(Blueprint $table){
                    $table->id();
                    $table->string('employee_name');
                    $table->string('email');
                    $table->string('designation');
                    $table->string('phone_number');
                    $table->string('salary');
                    $table->string('age');
                    $table->string('dob');
                    $table->string('image');
                    $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_info');

    }
};
