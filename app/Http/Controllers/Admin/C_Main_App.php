<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Controllers\Admin\C_Helper;

use App\Models\M_User;
use App\Models\M_Kelompok_Binaan;
use App\Models\M_Kegiatan;

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
        $totalBinaan = M_User::where('role', 'BINAAN') -> count();
        $totalMentor = M_User::where('role', 'MENTOR') -> count();
        $totalKegiatan = M_Kegiatan::count();
        $kelompokBinaan = M_Kelompok_Binaan::count();
        $dr = ['tBinaan' => $totalBinaan, 'tKelompokBinaan' => $kelompokBinaan, 'tMentor' => $totalMentor, 'tKegiatan' => $totalKegiatan];
        return view('admin.mainApp.dashboard.berandaPage', $dr);
    }
}
