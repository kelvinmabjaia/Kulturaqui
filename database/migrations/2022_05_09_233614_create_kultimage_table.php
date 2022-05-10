<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Teatro;

return new class extends Migration
{
    public function up()
    {
        Schema::create('kultimage', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kulteatro_id');
            $table->string('alt')->nullable();;
            $table->string('src');
            $table->timestamps();

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
        Schema::dropIfExists('kultimage');
    }
};
