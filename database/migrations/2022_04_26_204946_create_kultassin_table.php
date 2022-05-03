<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('kultassin')) {
            Schema::create('kultassin', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('user_id'); 
                $table->unsignedBigInteger('kultplano_id'); 
                $table->date('dataIni');
                $table->date('dataFim');
                $table->boolean('exp');
                $table->timestamps();
    
                $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')
                    ->onDelete('cascade');
                $table->foreign('kultplano_id')->references('id')->on('kultplano')->onUpdate('cascade')
                    ->onDelete('cascade');
            });
        }
    }

    public function down()
    {
        Schema::disableForeignKeyConstraints(); 
        Schema::dropIfExists('kultassin');
    }
};
