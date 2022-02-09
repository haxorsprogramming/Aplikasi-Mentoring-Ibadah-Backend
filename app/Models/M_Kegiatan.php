<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\M_Peserta;

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

    public function mentorData()
    {
        return $this -> belongsTo(M_Profile_Member::class, 'id_mentor', 'username');
    }

    public function totalBinaan($idKegiatan)
    {
        return M_Peserta::where('id_kegiatan', $idKegiatan) -> count();
    }

    public function statusSetoran($idKegiatan)
    {
        $totalBinaan = M_Peserta::where('id_kegiatan', $idKegiatan) -> count();
        $tSelesai = M_Peserta::where('id_kegiatan', $idKegiatan) -> where('status_setoran', 'SELESAI') -> count();
        if($totalBinaan == $tSelesai){
            return "SELESAI";
        }else{
            return "BERLANGSUNG";
        }
    }

}
