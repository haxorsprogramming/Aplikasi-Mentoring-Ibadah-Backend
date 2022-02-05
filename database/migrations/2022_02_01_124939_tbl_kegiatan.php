<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblKegiatan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_kegiatan', function (Blueprint $table) {
            $table -> id();
            $table -> char('token_kegiatan', 50);
            $table -> char('nama_kegiatan', 150);
            $table -> date('tanggal_kegiatan');
            $table -> char('id_kelompok_binaan', 50);
            $table -> char('id_mentor', 50);
            $table -> char('waktu_mulai', 5);
            $table -> char('waktu_selesai', 5);
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
        Schema::dropIfExists('tbl_kegiatan');
    }
}
