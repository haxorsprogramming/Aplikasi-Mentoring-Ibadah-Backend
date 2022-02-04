<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_Jenis_Amalan extends Model
{
    protected $table = "tbl_jenis_amalan";

    protected $fillable = [
        'kd_amalan',
        'nama_amalan',
        'keterangan',
        'durasi',
        'active'
    ];
}
