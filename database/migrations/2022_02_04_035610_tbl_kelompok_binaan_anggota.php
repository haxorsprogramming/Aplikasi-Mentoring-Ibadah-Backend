<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblKelompokBinaanAnggota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_kelompok_binaan_anggota', function (Blueprint $table) {
            $table -> id();
            $table -> char('token_anggota', 50);
            $table -> char('id_kelompok_binaan', 100);
            $table -> char('id_binaan', 100);
            $table -> timestamps();
            $table -> char('active', 1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_kelompok_binaan_anggota');
    }
}
