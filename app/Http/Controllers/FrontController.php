<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('landing-page.index');
    }

    public function contact()
    {
        return view('landing-page.contact');
    }

    public function price()
    {
        return view('landing-page.price');
    }

    public function about()
    {
        return view('landing-page.about');
    }
}
