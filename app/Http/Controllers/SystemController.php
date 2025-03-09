<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    public function dashboardClass()
    {
        $user = User::first();

        // Check if user has active subscription
        if($user && $user->hasActiveSubscription())
        {
            return redirect()->route('dashboard');
        }
        // Redirect to pricing page if user has no active subscription
        else {
            return view('class');
        }
    }
}
