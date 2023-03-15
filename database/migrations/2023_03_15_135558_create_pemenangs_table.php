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
        Schema::create('pemenang_15480', function (Blueprint $table) {
            $table->id('id_15480');
            $table->unsignedBigInteger('id_lelang_15480');
            $table->unsignedBigInteger('id_history_lelang_15480');
            $table->timestamps();

            $table->foreign('id_lelang_15480')->references('id_15480')->on('lelangs_15480')->onDelete('cascade');
            $table->foreign('id_history_lelang_15480')->references('id_15480')->on('history_lelangs_15480')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemenang_15480');
    }
};
