<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_Peserta extends Model
{
    protected $table = "tbl_peserta";

    protected $fillable = [
        'token_antrian',
        'ordinal',
        'id_kegiatan',
        'id_jenis_amalan',
        'id_binaan',
        'waktu_daftar',
        'waktu_selesai',
        'status_approve',
        'status_setoran',
        'active'
    ];
}
