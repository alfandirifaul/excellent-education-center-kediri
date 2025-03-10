<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaDashboardController extends Controller
{
    public function index()
    {
        return view('siswa-dashboard.index');
    }

    public function settings()
    {
        return view('siswa-dashboard.setting.index');
    }
}
