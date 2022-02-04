<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_Kelompok_Binaan_anggota extends Model
{
    protected $table = "tbl_kelompok_binaan_anggota";

    protected $fillable = [
        'token_anggota',
        'id_kelompok_binaan',
        'id_binaan',
        'active'
    ];

    

}
