<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiswaDashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('layouts.siswa-dashboard', compact('user'));
    }

    public function settings()
    {
        return view('siswa-dashboard.setting.index');
    }
}
