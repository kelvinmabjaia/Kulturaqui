<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('kultestad')) {
            Schema::create('kultestad', function (Blueprint $table) {
                $table->id();
                $table->string('designac');
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::disableForeignKeyConstraints(); 
        Schema::dropIfExists('kultestad');
    }
};
