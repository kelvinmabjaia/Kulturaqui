<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('gender');
            $table->date('birthday');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('password');
            $table->unsignedBigInteger('role'); 
            $table->unsignedBigInteger('kultpais_id'); 
            $table->unsignedBigInteger('kultpayme_id')->nullable();
            $table->unsignedBigInteger('kultestad_id'); 
            $table->string('profile_photo_path', 2048)->nullable();
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::disableForeignKeyConstraints(); 
        Schema::dropIfExists('users');
    }
};
