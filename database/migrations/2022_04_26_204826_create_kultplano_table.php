<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('kultplano')) {
            Schema::create('kultplano', function (Blueprint $table) {
                $table->id();
                $table->string('designac');
                $table->string('preco');
                $table->longText('desc');
                $table->integer('durac');
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::disableForeignKeyConstraints(); 
        Schema::dropIfExists('kultplano');
    }
};
