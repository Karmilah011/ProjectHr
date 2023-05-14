<?php

namespace App\Http\Controllers;

use App\Approval;
use App\Form_cuti;
use Illuminate\Support\Facades\DB;
use Auth;
use App\User;
use Illuminate\Http\Request;

class ApprovalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $approval = DB::table('approvals as a')
        ->select('a.*','a.created_at as date_fill','b.name as name','c.leave_type as leave')
        ->join('users as b', 'b.employe_id', "=", "a.employe_id")
        ->join('leave_masters as c', DB::raw('CAST(c.id as INT)'),'=',DB::raw('CAST(a.leave_master_id as INT)'))
        ->where('a.approved','=','menunggu')
        ->get();
        // dd($approval,$employeId);

        return view('approval.index',compact('approval')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Approval  $approval
     * @return \Illuminate\Http\Response
     */
    public function show(Approval $approval)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Approval  $approval
     * @return \Illuminate\Http\Response
     */
    public function edit(Approval $approval)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Approval  $approval
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $approval = Approval::find($id);
        $approval->approved = $request->approved;
        $approval->save();

        $formCuti = Form_cuti::find($id);
        $formCuti->approval_id = $approval->id;
        $formCuti->save();

        return redirect('/approval');
    }
    public function update2(Request $request, $id)
    {
        $approval = Approval::find($id);
        $approval->approved = $request->approved;
        $approval->save();

        $formCuti = Form_cuti::find($id);
        $formCuti->approval_id = $approval->id;
        $formCuti->save();

        return redirect()->route('fcuti.index',Auth::user()->employe_id);    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Approval  $approval
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Approval::destroy($id);
        return redirect('/approval');
    }
}
