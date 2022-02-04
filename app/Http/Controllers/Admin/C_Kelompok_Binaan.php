<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\M_User;
use App\Models\M_Kelompok_Binaan;

class C_Kelompok_Binaan extends Controller
{
    public function kelompokBinaanPage()
    {
        $dataMentor = M_User::where('role', 'MENTOR') -> get();
        $dataKelompokBinaan = M_Kelompok_Binaan::all();
        $dr = ['dataMentor' => $dataMentor, 'dataKelompokBinaan' => $dataKelompokBinaan];
        return view('admin.mainApp.kelompokBinaan.kelompokBinaanPage', $dr);
    }
    public function prosesTambahKelompokBinaan(Request $request)
    {
        // {'nama':nama, 'deks':deks, 'mentor':mentor}
        $kb = new M_Kelompok_Binaan();
        $kb -> id_kelompok_binaan = Str::uuid();
        $kb -> nama_kelompok_binaan = $request -> nama;
        $kb -> deks = $request -> deks;
        $kb -> id_mentor = $request -> mentor;
        $kb -> active = "1";
        $kb -> save();
        $dr = ['status' => 'sukses'];
        return \Response::json($dr);
    }
}
