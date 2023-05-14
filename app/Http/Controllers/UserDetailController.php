<?php

namespace App\Http\Controllers;

use App\UserDetail;
use Illuminate\Http\Request;
use DB;
use App\User;
use App\Struktur;
class UserDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($employeId)
    {
        $employeId = (int) $employeId;
        $userDetail = UserDetail::where('employe_id',$employeId)->first();

        $userFamily = DB::table('user_families as a')->select('*','b.hubungan as hubungan')
                    ->leftjoin('family_types as b','a.id','=','b.user_family_id')
                    ->where('a.employe_id',$employeId)
                    ->get();  
        
        $organization = Struktur::where('status_struktur','active')->get();
        // dd($organization);
        // die;
        return view('user_detail.index',compact('userDetail','userFamily','organization'));
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
     * @param  \App\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function show(UserDetail $userDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(UserDetail $userDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'ket_tidak_mampu' => 'mimes:pdf,jpg,jpeg,png|max:10240'
        // ]);
        $userDetail = UserDetail::find($id);
        $userDetail->no_hp = "+62".$request->no_hp;
        $userDetail->name = $request->name;
        $userDetail->employe_id = $request->employe_id;
        $userDetail->tanggal_lahir = $request->tanggal_lahir;
        $userDetail->kota = $request->kota;
        $userDetail->email = $request->email;
        $userDetail->job_position = $request->job_position;
        $userDetail->gender = $request->gender;
        $userDetail->tempat_kelahiran = $request->tempat_kelahiran;
        $userDetail->alamat_ktp = $request->alamat_ktp;
        $userDetail->alamat_tinggal = $request->alamat_tinggal;
        $userDetail->struktur_id = $request->struktur_id;
        $userDetail->tanggal_bergabung = $request->tanggal_bergabung;
        $userDetail->masa_kerja = $request->masa_kerja;
        $userDetail->npwp = $request->npwp;
        $userDetail->bpjs = $request->bpjs;
        $userDetail->status = $request->status;
        if(isset($request->attachment) && $request->attachment != null){
        $attachment = $request->attachment;
        // dd($attachment);
        $attachSelect = $request->select_attachment;
        $extension = 
        $v_attachment = $attachSelect."_".time().rand(100,999).".".$request->file('attachment')->extension();
        $userDetail->attachment = $v_attachment;
        $attachment->move(public_path().'/files/attachment/',$v_attachment);
        }
        $userDetail->save();

        $user = User::where('employe_id',$userDetail->employe_id)->first();
        // dd($user);
        $user = User::find($user->id);
        $user->name = $request->name;
        $user->save();

        return redirect()->route('user_detail.index',$userDetail->employe_id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserDetail $userDetail)
    {
        //
    }
}
