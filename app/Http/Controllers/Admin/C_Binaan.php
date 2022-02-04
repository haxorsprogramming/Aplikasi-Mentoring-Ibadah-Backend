<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\M_User;
use App\Models\M_Profile_Member;

class C_Binaan extends Controller
{
    public function binaanPage()
    {
        $dataBinaan = M_User::where('role', 'BINAAN') -> get();
        $dr = ['dataBinaan' => $dataBinaan];
        return view('admin.mainApp.binaan.binaanPage', $dr);
    }
    public function prosesTambahBinaan(Request $request)
    {
        // {'username':username, 'password':password, 'nama':nama, 'hp':hp, 'jk':jk, 'email':email}
        $user = new M_User();
        $user -> username = $request -> username;
        $user -> role = "BINAAN";
        $user -> password = password_hash($request -> password, PASSWORD_DEFAULT);
        $user -> active = "1";
        $user -> save();
        // save table profile 
        $profile = new M_Profile_Member();
        $profile -> username = $request -> username;
        $profile -> nama_lengkap = $request -> nama;
        $profile -> nomor_handphone = $request -> hp;
        $profile -> email = $request -> email;
        $profile -> jk = $request -> jk;
        $profile -> active = "1";
        $profile -> save();
        $dr = ['status' => 'sukses'];
        return \Response::json($dr);
    }
    public function getDataBinaan(Request $request)
    {
        $dataBinaan = M_Profile_Member::where('username', $request -> username) -> first();
        return \Response::json($dataBinaan);
    }
    public function prosesHapusBinaan(Request $request)
    {
        // {'username':appBinaan.usernameEdit, 'password':password, 'nama':nama, 'hp':hp, 'email':email}
        M_Profile_Member::where('username', $request -> username) -> update([
            'nama_lengkap' => $request -> nama,
            'nomor_handphone' => $request -> hp,
            'email' => $request -> email,
            'jk' => $request -> jk
        ]);
        if($request -> password != ""){
            M_User::where('username', $request -> username) -> update([
                'password' => password_hash($request -> password, PASSWORD_DEFAULT)
            ]);
        }
        $dr = ['status' => 'sukses'];
        return \Response::json($dr);
    }
}
