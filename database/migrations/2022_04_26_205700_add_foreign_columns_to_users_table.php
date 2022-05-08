<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('role')->references('id')->on('roles')->onUpdate('cascade')
                                                                    ->onDelete('cascade');
            $table->foreign('kultpais_id')->references('id')->on('kultpais')->onUpdate('cascade')
                                                                    ->onDelete('cascade');
            $table->foreign('kultpayme_id')->nullable() ->references('id')->on('kultpayme')->onUpdate('cascade')
                                         
                                                                    ->onDelete('cascade');
            $table->foreign('kultestad_id')->references('id')->on('kultestad')->onUpdate('cascade')
                                                                    ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::disableForeignKeyConstraints(); 
        Schema::table('users', function (Blueprint $table) { });
    }
};
