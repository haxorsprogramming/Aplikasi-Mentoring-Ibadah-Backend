<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Controllers\Admin\C_Helper;

class C_Main_App extends Controller
{
    protected $helperCtr;

    public function __construct(C_Helper $helperCtr)
    {
        $this -> helperCtr = $helperCtr;
    }
    
    public function index()
    {
        $userData = $this -> helperCtr -> getUserLoginData();
        $dr = ['userLogin' => $userData -> username];
        return view('admin.mainApp.dashboard.dashboardPage', $dr);
    }
    
    public function beranda()
    {
        return view('admin.mainApp.dashboard.berandaPage');
    }
}
