<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class C_Mentor extends Controller
{
    public function mentorPage()
    {
        return view('admin.mainApp.mentor.mentorPage');
    }
}
