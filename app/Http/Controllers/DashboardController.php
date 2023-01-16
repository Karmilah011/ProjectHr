<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('dashboard.dashboard');
    }
    public function dashboardPimpinan()
    {
        return view('dashboard.dashboard-pimpinan');
    }
    public function dashboardAdmin()
    {
        return view('dashboard.dashboard-admin');
    }
}

