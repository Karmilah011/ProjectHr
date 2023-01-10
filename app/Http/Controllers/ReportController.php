<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function report()
    {
        return view('report.report');
    }

    public function reportadmin()
    {
        return view('report.reportadmin');
    }
}
