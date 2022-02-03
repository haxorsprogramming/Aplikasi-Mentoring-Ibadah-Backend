<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\M_User;
use App\Models\M_Profile_Member;

class C_Mentor extends Controller
{
    public function mentorPage()
    {
        $dataMentor = M_User::where('role', 'MENTOR') -> get();
        $dr = ['dataMentor' => $dataMentor];
        return view('admin.mainApp.mentor.mentorPage', $dr);
    }
    public function prosesTambahMentor(Request $request)
    {
        // {'username':username, 'password':password, 'nama':nama, 'hp':hp, 'jk':jk, 'email':email}
        // save tabel use 
        $user = new M_User();
        $user -> username = $request -> username;
        $user -> role = "MENTOR";
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
    public function getDataMentor(Request $request)
    {
        $dataMentor = M_Profile_Member::where('username', $request -> username) -> first();
        return \Response::json($dataMentor);
    }
    public function prosesEditMentor(Request $request)
    {
        // {'username':username, 'password':password, 'nama':nama, 'hp':hp, 'jk':jk, 'email':email}
        M_Profile_Member::where('username', $request -> username) -> update([
            'nama_lengkap' => $request -> nama,
            'nomor_handphone' => $request -> hp,
            'email' => $request -> email,
            'jk' => $request -> jk
        ]);
        if($request -> password == ""){
            
        }else{
            M_User::where('username', $request -> username) -> update([
                'password' => password_hash($request -> password, PASSWORD_DEFAULT)
            ]);
        }
        $dr = ['status' => 'sukses'];
        return \Response::json($dr);
    }
    public function prosesHapusMentor(Request $request)
    {
        M_Profile_Member::where('username', $request -> username) -> delete();
        M_User::where('username', $request -> username) -> delete();
        $dr = ['status' => 'sukses'];
        return \Response::json($dr);
    }
}
