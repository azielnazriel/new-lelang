<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        DB::unprepared("
        CREATE PROCEDURE `insert_barang`(
            IN `nama_barang` VARCHAR(255), 
            IN `tanggal` DATE, 
            IN `harga_awal` INT, 
            IN `deskripsi` TEXT, 
            IN `gambar` VARCHAR(255)) NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER
        BEGIN 
            INSERT INTO barangs_15480(
                `id_15480`,
                `nama_barang_15480`,
                `tgl_15480`,
                `harga_awal_15480`,
                `deskripsi_15480`,
                `gambar_15480`,
                `created_at`,
                `updated_at`
            ) VALUES(NULL, nama_barang, tanggal, harga_awal, deskripsi, gambar, now(), NULL);
        END
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP PROCEDURE IF EXISTS `insert_barang`');
    }
};