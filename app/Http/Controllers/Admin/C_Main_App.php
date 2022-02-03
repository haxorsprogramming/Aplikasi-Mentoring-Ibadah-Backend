<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class C_Main_App extends Controller
{
    public function index()
    {
        return view('admin.mainApp.dashboard.dashboardPage');
    }
    public function beranda()
    {
        return view('admin.mainApp.dashboard.berandaPage');
    }
}
