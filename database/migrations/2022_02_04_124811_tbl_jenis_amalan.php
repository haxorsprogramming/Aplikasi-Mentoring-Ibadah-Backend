<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblJenisAmalan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_jenis_amalan', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_amalan', 50);
            $table -> char('nama_amalan', 100);
            $table -> text('keterangan') -> nullable();
            $table -> integer('durasi');
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
        Schema::dropIfExists('tbl_jenis_amalan');
    }
}
