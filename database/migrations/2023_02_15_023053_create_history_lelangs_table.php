<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\ForeignKeyDefinition;
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
        Schema::create('history_lelangs_15480', function (Blueprint $table) {
            $table->id('id_15480');
            $table->unsignedBigInteger('id_lelang_15480');
            $table->unsignedBigInteger('id_barang_15480');
            $table->unsignedBigInteger('id_masyarakat_15480');
            $table->integer('penawaran_harga_15480');
            $table->timestamps();

            $table->Foreign('id_lelang_15480')->references('id_15480')->on('lelangs_15480')->onDelete('cascade');
            $table->Foreign('id_barang_15480')->references('id_15480')->on('barangs_15480')->onDelete('cascade');
            $table->Foreign('id_masyarakat_15480')->references('id_15480')->on('masyarakats_15480')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('history_lelangs_15480');
    }
};
