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
        Schema::create('lelangs_15480', function (Blueprint $table) {
            $table->id('id_15480');
            $table->unsignedBigInteger('id_barang_15480');
            $table->date('tgl_lelang_15480');
            $table->unsignedBigInteger('harga_akhir_15480')->nullable();
            $table->unsignedBigInteger('id_masyarakat_15480')->nullable();
            $table->unsignedBigInteger('id_petugas_15480');
            $table->enum('status_15480', ['dibuka', 'ditutup']);
            $table->timestamps();

            $table->foreign('id_barang_15480')->references('id_15480')->on('barangs_15480')->onDelete('cascade');
            $table->foreign('id_masyarakat_15480')->references('id_15480')->on('masyarakats_15480')->onDelete('cascade');
            $table->foreign('id_petugas_15480')->references('id_15480')->on('petugas_15480')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lelangs_15480');
    }
};
