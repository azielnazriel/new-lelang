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
        Schema::create('barang_log', function (Blueprint $table) {
            $table->id();
            $table->string('old_nama_barang_15480')->nullable();
            $table->string('new_nama_barang_15480')->nullable();
            $table->integer('old_harga_awal_15480')->nullable();
            $table->integer('new_harga_awal_15480')->nullable();
            $table->string('old_deskripsi_15480')->nullable();
            $table->string('new_deskripsi_15480')->nullable();
            $table->enum('action', ['insert', 'update', 'delete']);
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
        Schema::dropIfExists('barang_log');
    }
};
