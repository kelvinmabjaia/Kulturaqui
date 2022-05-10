<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('kulteatro', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('titulo');
            $table->string('link');
            $table->string('link_trailer')->nullable();
            $table->unsignedBigInteger('kultcateg_id');
            $table->longText('descrica');
            $table->boolean('idd'); // Restrição de idade
            $table->date('dataLanc');
            $table->dateTime('durac', $precision = 0);
            $table->integer('views');
            $table->unsignedBigInteger('kultestad_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            $table->foreign('kultestad_id')->references('id')->on('kultestad')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

        });
    }

    public function down()
    {
        Schema::dropIfExists('kulteatro');
    }
};
