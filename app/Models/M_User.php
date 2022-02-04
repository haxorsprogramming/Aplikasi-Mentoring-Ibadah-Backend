<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_User extends Model
{
    protected $table = "tbl_user";

    protected $fillable = [
        'username',
        'role',
        'password',
        'api_token',
        'active'
    ];

    public function profileData()
    {
        return $this -> belongsTo(M_Profile_Member::class, 'username', 'username');
    }
    
    public function cekBinaanKelompok($idKelompok, $username)
    {
        return M_Kelompok_Binaan_anggota::where('id_kelompok_binaan', $idKelompok) -> where('id_binaan', $username) -> count();
    }

}
