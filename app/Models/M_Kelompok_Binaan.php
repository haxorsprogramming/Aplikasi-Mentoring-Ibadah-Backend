<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\M_Kelompok_Binaan_anggota;

class M_Kelompok_Binaan extends Model
{
    protected $table = "tbl_kelompok_binaan";

    protected $fillable = [
        'id_kelompok_binaan',
        'nama_kelompok_binaan',
        'deks',
        'id_mentor',
        'active'
    ];

    public function mentorData()
    {
        return $this -> belongsTo(M_Profile_Member::class, 'id_mentor', 'username');
    }

    public function totalAnggota($idKelompok)
    {
        return M_Kelompok_Binaan_anggota::where('id_kelompok_binaan', $idKelompok) -> count();
    }

}
