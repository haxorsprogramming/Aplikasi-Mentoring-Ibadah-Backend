<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\M_Profile_Member;
use App\Models\M_Jenis_Amalan;

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

    public function binaanData($idBinaan)
    {
        return M_Profile_Member::where('username', $idBinaan) -> first();
    }
    public function jenisAmalan($idAmalan)
    {
        return M_Jenis_Amalan::where('kd_amalan', $idAmalan) -> first();
    }
    
}
