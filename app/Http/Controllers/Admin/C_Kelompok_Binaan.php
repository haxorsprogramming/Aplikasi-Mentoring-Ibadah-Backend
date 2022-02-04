<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\M_User;
use App\Models\M_Kelompok_Binaan;
use App\Models\M_Kelompok_Binaan_anggota;

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
    public function detailKelompokBinaan(Request $request, $idKelompokBinaan)
    {
        $dataBinaan = M_User::where('role', 'BINAAN') -> get();
        $detailKb = M_Kelompok_Binaan::where('id_kelompok_binaan', $idKelompokBinaan) -> first();
        $dr = ['dataBinaan' => $dataBinaan, 'detailKb' => $detailKb];
        return view('admin.mainApp.kelompokBinaan.detail.detailKelompokBinaan', $dr);
    }
    public function prosesTambahAnggota(Request $request)
    {
        // // {'idKelompok':idKelompokBinaan, 'username':username}
        // cek data 
        // $cData = M_Kelompok_Binaan_anggota::where('id_kelompok_binaan', $request -> idKelompok) -> where('id_binaan', $request -> username) -> count();

        // $kba = new M_Kelompok_Binaan_anggota();
        // $kba -> token_anggota = Str::uuid();
        // $kba -> id_kelompok_binaan = $request -> idKelompok;
        // $kba -> id_binaan = $request -> username;
        // $kba -> active = "1";
        // $kba -> save();
        $dr = ['status' => 'success'];
        return \Response::json($dr);
    }
}
