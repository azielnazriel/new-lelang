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
        Schema::create('barangs_15480', function (Blueprint $table) {
            $table->id('id_15480');
            $table->string('nama_barang_15480');
            $table->date('tgl_15480');
            $table->string('nama_lengkap_15480');
            $table->integer('harga_awal_15480');
            $table->string('deskripsi_15480');
            $table->string('gambar_15480');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barangs_15480');
    }
};
