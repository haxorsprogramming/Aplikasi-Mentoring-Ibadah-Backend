<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\M_Kegiatan;
use App\Models\M_Peserta;
use App\Models\M_Jenis_Amalan;

class C_Mlfq extends Controller
{
    public function mlfqPage()
    {
        $dataKegiatan = M_Kegiatan::all();
        $dr = ['dataKegiatan' => $dataKegiatan];
        return view('admin.mainApp.mlfq.mlfqPage', $dr);
    }
    public function analisaPage(Request $request, $token)
    {
        $idKegiatan = $token;
        $dataPeserta = M_Peserta::where('id_kegiatan', $token) -> get();
        $jenisAmalan = M_Jenis_Amalan::all();
        $dr = ['dataPeserta' => $dataPeserta, 'jenisAmalan' => $jenisAmalan, 'idKegiatan' => $idKegiatan];
        return view('admin.mainApp.mlfq.analisa.analisaPage', $dr);
    }
}
