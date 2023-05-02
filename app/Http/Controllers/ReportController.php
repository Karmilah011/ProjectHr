<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Approval;

class ReportController extends Controller
{
    public function report()
    {
        $approval = Approval::all();
        return view('report.report',compact('approval'));
    }

    public function reportadmin()
    {
        return view('report.reportadmin');
    }
}
