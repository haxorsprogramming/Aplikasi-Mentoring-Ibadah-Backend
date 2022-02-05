<?php

namespace App\Http\Controllers\Aplikasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class C_Auth extends Controller
{
    public function loginPage()
    {
        return view('aplikasi.auth.loginPage');
    }
}
