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
            CREATE TRIGGER `barang_log_trigger` AFTER INSERT ON `barangs_15480` FOR EACH ROW
            BEGIN
                INSERT INTO barang_log VALUES( 
                    NULL, 
                    NULL, 
                    NEW.nama_barang_15480, 
                    NULL, 
                    NEW.harga_awal_15480, 
                    NULL, 
                    NEW.deskripsi_15480, 
                    'insert',
                    now(),
                    NULL
                );
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
        DB::unprepared("DROP TRIGGER IF EXISTS 'barang_log_trigger'");
    }
};
