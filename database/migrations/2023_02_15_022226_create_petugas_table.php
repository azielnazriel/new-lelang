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
        Schema::create('petugas_15480', function (Blueprint $table) {
            $table->id('id_15480');
            $table->string('nama_petugas_15480');
            $table->string('username_15480');
            $table->string('password_15480');
            $table->unsignedBigInteger('id_level_15480');
            $table->timestamps();

            $table->foreign('id_level_15480')->references('id_level_15480')->on('levels_15480')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('petugas_15480');
    }
};
