<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Form_cuti;

class DashboardController extends Controller
{
    public function dashboard()
    {
        // $request_approval = DB::table('approvals')
        // ->select(DB::raw('COUNT(1) as total'))
        // ->where('employe_id',Auth::user()->employe_id)
        // ->andWhere('approved','menunggu')->first();
        // // dd($request_approval);
        return view('dashboard.dashboard');
    }
    public function dashboardapprover()
    {
        $request_approval = DB::table('approvals')
        ->select(DB::raw('COUNT(1) as total'))
        ->where('employe_id',Auth::user()->employe_id)
        ->where('approved','menunggu')->first();
        // dd($request_approval->total);
        $request_approval = $request_approval->total;

        // $HariCuti = DB::where('employe_id',Auth::user()->employe_id)->get();
        // dd($HariCuti);
        // $jumlahHariCuti = 
        return view('dashboard.dashboard-approver',compact('request_approval'));
    }
    public function dashboardAdmin()
    {
        return view('dashboard.dashboard-admin');
    }
}

