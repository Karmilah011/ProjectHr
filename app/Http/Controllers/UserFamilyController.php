<?php

namespace App\Http\Controllers;

use App\UserFamily;
use Auth;
use App\FamilyType;
use App\UserDetail;
use DB;
use Illuminate\Http\Request;

class UserFamilyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = UserFamily::where('employe_id',Auth::user()->employe_id)->get();
        // $familyType = DB::where('employe_id',Auth::user()->employe_id)->get();
        $familyType = DB::table('family_types as a')
            ->select('a.*','b.gender_family as gender')
            ->join('user_families as b','a.user_family_id','=','b.id')
            ->where('a.employe_id',Auth::user()->employe_id)->get();
        // dd($data);
        return view('user_family.create',compact('data','familyType'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userDetail = UserDetail::where('employe_id',Auth::user()->employe_id)->first();
        $userDetail->status = 'menikah';
        $userDetail->save();
        // dd($request->all());

        $checkUserFamily = UserFamily::where('employe_id',Auth::user()->employe_id)->get();
        if($checkUserFamily){
            UserFamily::where('employe_id',Auth::user()->employe_id)->delete();
            FamilyType::where('employe_id',Auth::user()->employe_id)->delete();
        }

        $userFamily = new UserFamily;
        $userFamily->employe_id = Auth::user()->employe_id;
        $userFamily->nama_lengkap_family = $request->nameFamily1;
        $userFamily->tempat_kelahiran_family = $request->tempat_lahir_family1;
        $userFamily->tgl_lahir_family = $request->tanggal_lahir_family1;
        $userFamily->alamat_ktp_family = $request->alamat_ktp_family1;
        $userFamily->alamat_tinggal_family = $request->alamatTinggal1;
        $userFamily->bpjs_family = $request->bpjs_family1;
        $userFamily->npwp_family = $request->npwp_family1;
        $userFamily->gender_family = $request->genderFamily1;
        $userFamily->attachment = 'ktp.jpg';
        if(
            $userFamily->nama_lengkap_family != null &&
            $userFamily->tempat_kelahiran_family != null &&
            $userFamily->tgl_lahir_family != null &&
            $userFamily->alamat_ktp_family != null &&
            $userFamily->alamat_tinggal_family != null &&
            $userFamily->gender_family != null
        )
        {
            $userFamily->save();
            $familyType = new FamilyType;
            $familyType->employe_id = $userFamily->employe_id;
            $familyType->user_family_id = $userFamily->id;
            $familyType->hubungan = $request->statusFamily1;
            $familyType->save();

        }

        $userFamily2 = new UserFamily;
        $userFamily2->employe_id = Auth::user()->employe_id;
        $userFamily2->nama_lengkap_family = $request->nameFamily2;
        $userFamily2->tempat_kelahiran_family = $request->tempat_lahir_family2;
        $userFamily2->tgl_lahir_family = $request->tanggal_lahir_family2;
        $userFamily2->alamat_ktp_family = $request->alamat_ktp_family2;
        $userFamily2->alamat_tinggal_family = $request->alamatTinggal2;
        $userFamily2->bpjs_family = $request->bpjs_family2;
        $userFamily2->npwp_family = $request->npwp_family2;
        $userFamily2->gender_family = $request->genderFamily2;
        $userFamily2->attachment = 'ktp.jpg';
        if(
            $userFamily2->nama_lengkap_family != null &&
            $userFamily2->tempat_kelahiran_family != null &&
            $userFamily2->tgl_lahir_family != null &&
            $userFamily2->alamat_ktp_family != null &&
            $userFamily2->alamat_tinggal_family != null &&
            $userFamily2->gender_family != null
        )
        {
            $userFamily2->save();
            $familyType = new FamilyType;
            $familyType->employe_id = $userFamily2->employe_id;
            $familyType->user_family_id = $userFamily2->id;
            $familyType->hubungan = $request->statusFamily2;
            $familyType->save();

        }
        $userFamily3 = new UserFamily;
        $userFamily3->employe_id = Auth::user()->employe_id;
        $userFamily3->nama_lengkap_family = $request->nameFamily3;
        $userFamily3->tempat_kelahiran_family = $request->tempat_lahir_family3;
        $userFamily3->tgl_lahir_family = $request->tanggal_lahir_family3;
        $userFamily3->alamat_ktp_family = $request->alamat_ktp_family3;
        $userFamily3->alamat_tinggal_family = $request->alamatTinggal3;
        $userFamily3->bpjs_family = $request->bpjs_family3;
        $userFamily3->npwp_family = $request->npwp_family3;
        $userFamily3->gender_family = $request->genderFamily3;
        $userFamily3->attachment = 'ktp.jpg';
        if(
            $userFamily3->nama_lengkap_family != null &&
            $userFamily3->tempat_kelahiran_family != null &&
            $userFamily3->tgl_lahir_family != null &&
            $userFamily3->alamat_ktp_family != null &&
            $userFamily3->alamat_tinggal_family != null &&
            $userFamily3->gender_family != null
        )
        {
            $userFamily3->save();
            $familyType = new FamilyType;
            $familyType->employe_id = $userFamily3->employe_id;
            $familyType->user_family_id = $userFamily3->id;
            $familyType->hubungan = $request->statusFamily3;
            $familyType->save();
        }
        // dd($request->all());
        
        //return redirect("user-detail/$request->employe_id");

        
        return redirect()->route('user_detail.index',Auth::user()->employe_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserFamily  $userFamily
     * @return \Illuminate\Http\Response
     */
    public function show(UserFamily $userFamily)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserFamily  $userFamily
     * @return \Illuminate\Http\Response
     */
    public function edit(UserFamily $userFamily)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserFamily  $userFamily
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserFamily $userFamily)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserFamily  $userFamily
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserFamily $userFamily)
    {
        //
    }
}
