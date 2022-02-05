<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\M_Kegiatan;
use App\Models\M_Peserta;

class C_Api extends Controller
{
    public function prosesTambahKegiatan(Request $request)
    {
        // {'kb':kelompokBinaan, 'nama':namaKegiatan, 'tanggal':tanggal, 'mulai':mulai, 'selesai':selesai}
        $kegiatan = new M_Kegiatan();
        $kegiatan -> token_kegiatan = Str::uuid();
        $kegiatan -> nama_kegiatan = $request -> nama;
        $kegiatan -> tanggal_kegiatan = $request -> tanggal;
        $kegiatan -> id_kelompok_binaan = $request -> kb;
        $kegiatan -> id_mentor = $request -> username;
        $kegiatan -> waktu_mulai = $request -> mulai;
        $kegiatan -> waktu_selesai = $request -> selesai;
        $kegiatan -> active = "1";
        $kegiatan -> save();
        $dr = ['status' => 'success'];
        return \Response::json($dr);
    }
    public function prosesPendaftaranKegiatan(Request $request)
    {
        // {'jenisAmalan':jenisAmalan, 'jenisKegiatan':jenisKegiatan, 'username':username}idKb
        $peserta = new M_Peserta();
        $peserta -> token_antrian = Str::uuid();
        $peserta -> ordinal = 1;
        $peserta -> id_kegiatan = $request -> jenisKegiatan;
        $peserta -> id_jenis_amalan = $request -> jenisAmalan;
        $peserta -> id_binaan = $request -> username;
        $peserta -> waktu_daftar = date('Y-m-d H:i:s');
        $peserta -> active = "1";
        $peserta -> save();
        $this -> resetOrdinal($request -> jenisKegiatan);
        $dr = ['status' => 'success'];
        return \Response::json($dr);
    }

    function resetOrdinal($idKegiatan)
    {
        $ord = 1;
        $dataAntrian = M_Peserta::where('id_kegiatan', $idKegiatan) -> get();
        foreach($dataAntrian as $antrian){
            $token = $antrian -> token_antrian;
            M_Peserta::where('token_antrian', $token) -> update(['ordinal' => $ord]);
            $ord ++;
        }
    }
}
