<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::create('user_details', function(Blueprint $table){
        //    $table->id();
        //    $table->string('user_name')->nullable();
        //    $table->string('email')->unique();
        //    $table->string('password');
        //    $table->string('role')->nullable();
        //    $table->string('designation')->nullable();
        //    $table->string('phone_number')->nullable();
        //    $table->string('salary')->nullable();
        //    $table->string('age')->nullable();
        //    $table->string('dob')->nullable();
        //    $table->string('image')->nullable();
        //    $table->timestamps();
        //});
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
