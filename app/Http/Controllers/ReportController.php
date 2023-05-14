<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Approval;
use DB;

class ReportController extends Controller
{
    public function report()
    {
        $approval = DB::table('approvals as a')->select('a.*','b.name as name','c.leave_type as leave')
        ->join('users as b', 'b.employe_id', "=", "a.employe_id")
        ->join('leave_masters as c', DB::raw('CAST(c.id as INT)'),'=',DB::raw('CAST(a.leave_master_id as INT)'))
        ->whereIn('a.approved',['setuju','tolak'])
        ->get();
        // dd($approval);
        return view('report.report',compact('approval'));
    }
    public function reportID($employeId)
    {
        // dd($employeId);
        $approval = DB::table('approvals as a')->select('a.*','b.name as name','c.leave_type as leave')
        ->join('users as b', 'b.employe_id', "=", "a.employe_id")
        ->join('leave_masters as c', DB::raw('CAST(c.id as INT)'),'=',DB::raw('CAST(a.leave_master_id as INT)'))
        ->whereIn('a.approved',['setuju','tolak'])
        ->where('a.employe_id',$employeId)
        ->get();
        // dd($approval,$employeId);
        return view('report.report',compact('approval'));
    }

    public function reportadmin()
    {
        return view('report.reportadmin');
    }
}
