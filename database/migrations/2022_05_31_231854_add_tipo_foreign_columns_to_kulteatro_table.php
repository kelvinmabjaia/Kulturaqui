<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kulteatro', function (Blueprint $table) {
            $table->unsignedBigInteger('kultipo_id'); 
            $table->foreign('kultipo_id')->references('id')->on('kultipo')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kulteatro', function (Blueprint $table) {
            $table->dropForeign('kulteatro_kultipo_id_foreign');
        });
    }
};
