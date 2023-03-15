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
        Schema::create('masyarakats_15480', function (Blueprint $table) {
            $table->id('id_15480');
            $table->string('nama_lengkap_15480');
            $table->string('username_15480');
            $table->string('password_15480');
            $table->string('telp_15480', 25);
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
        Schema::dropIfExists('masyarakats_15480');
    }
};
