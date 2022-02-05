<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_Kegiatan extends Model
{
    protected $table = "tbl_kegiatan";

    protected $fillable = [
        'token_kegiatan',
        'nama_kegiatan',
        'tanggal_kegiatan',
        'id_kelompok_binaan',
        'id_mentor',
        'waktu_mulai',
        'waktu_selesai',
        'active'
    ];
}
