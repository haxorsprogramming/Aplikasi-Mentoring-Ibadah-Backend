<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\M_Kegiatan;
use App\Models\M_Peserta;

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
    public function getTotalBurstTime($idKegiatan, $idJenisAmalan, $durasi)
    {
        $totalAmalan = M_Peserta::where('id_kegiatan', $idKegiatan) -> where('id_jenis_amalan', $idJenisAmalan) -> count();
        return $totalAmalan * $durasi;
    }
}
