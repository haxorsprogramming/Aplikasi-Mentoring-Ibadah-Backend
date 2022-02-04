<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\M_Jenis_Amalan;

class C_Jenis_Amalan extends Controller
{
    public function jenisAmalanPage()
    {
        $jenisAmalan = M_Jenis_Amalan::all();
        $dr = ['jenisAmalan' => $jenisAmalan];
        return view('admin.mainApp.jenisAmalan.jenisAmalanPage', $dr);
    }
    public function prosesTambahAmalan(Request $request)
    {
        // {'nama':nama, 'deks':deks, 'durasi':durasi}
        $ma = new M_Jenis_Amalan();
        $ma -> kd_amalan = Str::uuid();
        $ma -> nama_amalan = $request -> nama;
        $ma -> keterangan = $request -> deks;
        $ma -> durasi = $request -> durasi;
        $ma -> active = "1";
        $ma -> save();
        $dr = ['status' => 'sukses'];
        return \Response::json($dr);
    }
    public function getDataAmalan(Request $request)
    {
        $dataAmalan = M_Jenis_Amalan::where('kd_amalan', $request -> kdAmalan) -> first();
        return \Response::json($dataAmalan);
    }
    public function prosesUpdateAmalan(Request $request)
    {
        // {'nama':nama, 'deks':deks, 'durasi':durasi, 'kdAmalan':appAmalan.kdAmalanEdit}
        M_Jenis_Amalan::where('kd_amalan', $request -> kdAmalan) -> update([
            'nama_amalan' => $request -> nama,
            'keterangan' => $request -> deks,
            'durasi' => $request -> durasi
        ]);
        $dr = ['status' => 'sukses'];
        return \Response::json($dr);
    }
    public function prosesHapusAmalan(Request $request)
    {
        M_Jenis_Amalan::where('kd_amalan', $request -> kdAmalan) -> delete();
        $dr = ['status' => 'sukses'];
        return \Response::json($dr);
    }
}
