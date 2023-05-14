<?php

namespace App\Http\Controllers;

use App\Form_cuti;
use Auth;
use App\User;
use App\LeaveMaster;
use DB;
use App\Approval;
use Illuminate\Http\Request;

class FormCutiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fcuti = DB::table('form_cutis as a')->select('a.*', 'a.created_at as date_fill','b.approved as status', 'b.approved as approved','c.leave_type as leave')->where('a.employe_id',Auth::user()->employe_id)
        ->join('approvals as b','b.id','=','a.approval_id')
        ->join('leave_masters as c', 'c.id','=','a.leave_master_id')
        ->get();
        // $fcuti = Form_cuti::all();
        // dd($fcuti);
        $user = User::where('role','approver')->get();
        $leave_master = LeaveMaster::all();
        return view('fcuti.index', compact('fcuti','leave_master','user'));
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
        // var_dump($request->all());
        $create = new Form_cuti;
        $create->employe_id = Auth::user()->employe_id;
        $create->leave_master_id = $request->leave_master_id;
        $create->alsncuti = $request->alsncuti;
        $create->tanggalmulai = $request->tanggalmulai;
        $create->tanggalselesai = $request->tanggalselesai;
        $create->jhari = $request->jhari;
        if(isset($request->attachment) && $request->attachment != null){
            $attachment = $request->attachment;
            // dd($attachment);
            $attachSelect = $request->leave_master_id;
            $extension = 
            $v_attachment = $attachSelect."_".time().rand(100,999).".".$request->file('attachment')->extension();
            $create->attachment = $v_attachment;
            $attachment->move(public_path().'/files/',$v_attachment);
        }        

        $jenisCuti = LeaveMaster::select('*')->where('id',$request->leave_master_id)->first();
        // dd($v_attachment);
        switch ($jenisCuti->leave_type) {
            case 'Sick leave':
                // dd($create);
                $approval = new Approval;
                $approval->leave_master_id = $request->leave_master_id;
                $approval->alasancuti = $request->alsncuti;
                $approval->employe_id = Auth::user()->employe_id;
                $approval->tgl_pengajuan = time();
                $approval->attachment = $v_attachment;
                $approval->approved = 'setuju';
                $approval->save();
                break;
            case 'haid';
                $approval = new Approval;
                $approval->leave_master_id = $request->leave_master_id;
                $approval->alasancuti = $request->alsncuti;
                $approval->employe_id = Auth::user()->employe_id;
                $approval->tgl_pengajuan = time();
                $approval->approved = 'setuju';
                $approval->save();
                break;
            default:
                $approval = new Approval;
                $approval->leave_master_id = $request->leave_master_id;
                $approval->alasancuti = $request->alsncuti;
                $approval->employe_id = Auth::user()->employe_id;
                $approval->tgl_pengajuan = time();
                $approval->tgl_mulai = $request->tanggalmulai;
                $approval->tgl_selesai = $request->tanggalselesai;
                $approval->approved = 'menunggu';
                $approval->save();
                break;
        }
        $create->approval_id = $approval->id;
        $create->created_at = time();
        $create->save();
        return redirect()->route('fcuti.index',Auth::user()->employe_id);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Form_cuti  $form_cuti
     * @return \Illuminate\Http\Response
     */
    public function show(Form_cuti $form_cuti)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Form_cuti  $form_cuti
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fcuti = Form_cuti::find($id)->first();
        return view('fcuti.edit', compact('fcuti'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Form_cuti  $form_cuti
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $approval = Form_cuti::find($id);
        $approval->update($request->all());
        return redirect('/approval')->with(['success' => 'Data Cuti Diperbaharui!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Form_cuti  $form_cuti
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Form_cuti::destroy($id);
        return redirect('/fcuti');
    }
}
