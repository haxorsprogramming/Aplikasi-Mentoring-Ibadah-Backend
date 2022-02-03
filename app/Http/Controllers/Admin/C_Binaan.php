<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class C_Binaan extends Controller
{
    public function binaanPage()
    {
        return view('admin.mainApp.binaan.binaanPage');
    }
}
