<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('kultrate', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('kulteatro_id');
            $table->smallInteger('nota');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('kulteatro_id')->references('id')->on('kulteatro');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kultrate');
    }
};
