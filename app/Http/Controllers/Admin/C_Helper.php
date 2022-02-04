<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class C_Helper extends Controller
{
    public function getUserLoginData()
    {
        $key = env('JWT_KEY');
        $jwt = $_COOKIE['ADMIN_TOKEN'];
        $data = JWT::decode($jwt, new Key($key, 'HS256'));
        return $data;
    }
}
