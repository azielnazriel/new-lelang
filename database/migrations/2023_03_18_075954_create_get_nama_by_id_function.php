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
        CREATE FUNCTION `getNamaBarangById`(
            `id` INT
        ) RETURNS VARCHAR(255) NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER
        BEGIN
            DECLARE nama VARCHAR(255); 
            SELECT nama_barang_15480 INTO nama FROM `barangs_15480` WHERE id_15480 = id; RETURN nama; 
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
        DB::unprepared('DROP FUNCTION IF EXISTS `getNamaBarangById`');
    }
};
