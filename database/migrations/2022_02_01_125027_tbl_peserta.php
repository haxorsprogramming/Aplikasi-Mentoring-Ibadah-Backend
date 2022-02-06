<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblPeserta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_peserta', function (Blueprint $table) {
            $table -> id();
            $table -> char('token_antrian', 50);
            $table -> char('ordinal', 5);
            $table -> char('id_kegiatan', 200);
            $table -> char('id_jenis_amalan', 60);
            $table -> char('id_binaan', 200); 
            $table -> dateTime('waktu_daftar') -> nullable();
            $table -> dateTime('waktu_selesai') -> nullable();
            $table -> char('status_approve', 30) -> nullable();
            $table -> char('status_setoran', 40);
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
        Schema::dropIfExists('tbl_peserta');
    }
}
