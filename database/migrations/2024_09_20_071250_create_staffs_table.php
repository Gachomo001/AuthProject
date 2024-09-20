<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('staffs', function (Blueprint $table) {
        $table->id();
        $table->string('first_name');
        $table->string('middle_name')->nullable();
        $table->string('last_name');
        $table->date('dob');
        $table->string('gender');
        $table->string('phone');
        $table->string('email')->unique();
        $table->string('passport_photo')->nullable();
        $table->string('id_front')->nullable();
        $table->string('id_back')->nullable();
        $table->string('user_role');
        $table->string('status');
        $table->string('password');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('staffs');
}

};
