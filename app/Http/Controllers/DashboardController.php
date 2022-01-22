<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function instructorDashboard(Request $request)
    {
        return view('instructor.dashboard');
    }
    
}
