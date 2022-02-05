<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Firebase\JWT\JWT;
use App\Models\M_User;

class C_Auth extends Controller
{
    public function loginPage()
    {
        return view('admin.auth.loginPage');
    }
    public function loginProcess(Request $request)
    {
        $username = $request -> username;
        $password = $request -> password;
        // cari total user 
        $tUser = M_User::where('username', $username) -> count();
        if($tUser < 1){
            $status = "NO_USER";
            $tokenJwt = "";
        }else{
            // cari data user 
            $dataUser = M_User::where('username', $username) -> first();
            $passwordDb = $dataUser -> password;
            $cek_password = password_verify($password, $passwordDb);
            if($cek_password == true){
                $key = env('JWT_KEY');
                $role = $dataUser -> role;
                $payload = array(
                    "username" => $username,
                    "role" => $role
                );
                $tokenJwt = JWT::encode($payload, $key, 'HS256');
                $status = "ACCESS_GRANTED";
            }else{
                $status = "WRONG_PASSWORD";
                $tokenJwt = "";
            }
        }
        $dr = ['status' => $status, 'token' => $tokenJwt];
        return \Response::json($dr);
    }
    public function logout(Request $request)
    {
        setcookie("MONDRY_TOKEN", "", time() - 3600);
        $request -> session() -> flush();
        return redirect('/');
    }
}
