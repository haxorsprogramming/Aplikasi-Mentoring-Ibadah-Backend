<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblProfileMember extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_profile_member', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_member', 1);
            $table -> char('username', 100);
            $table -> char('nama_lengkap', 200);
            $table -> char('nomor_handphone', 50);
            $table -> char('email', 200);
            $table -> char('jk', 1);
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
        Schema::dropIfExists('tbl_profile_member');
    }
}
