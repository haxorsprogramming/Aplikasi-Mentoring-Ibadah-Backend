<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_Profile_Member extends Model
{
    protected $table = "tbl_profile_member";

    protected $fillable = [
        'username',
        'nama_lengkap',
        'nomor_handphone',
        'email',
        'jk',
        'active'
    ];
}
