<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('kultpayme')) {
            Schema::create('kultpayme', function (Blueprint $table) {
                $table->id();
                $table->string('metodo');
                $table->string('nrConta');
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::disableForeignKeyConstraints(); 
        Schema::dropIfExists('kultpayme');
    }
};
