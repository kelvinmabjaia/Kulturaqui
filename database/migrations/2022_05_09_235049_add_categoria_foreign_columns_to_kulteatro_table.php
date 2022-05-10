<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('kulteatro', function (Blueprint $table) {
            $table->foreign('kultcateg_id')->references('id')->on('kultcateg')
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
            $table->dropForeign('kulteatro_kultcateg_id_foreign');
        });
    }
};
