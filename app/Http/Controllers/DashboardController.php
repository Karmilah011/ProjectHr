<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('dashboard.dashboard');
    }
    public function dashboardapprover()
    {
        return view('dashboard.dashboard-approver');
    }
    public function dashboardAdmin()
    {
        return view('dashboard.dashboard-admin');
    }
}

