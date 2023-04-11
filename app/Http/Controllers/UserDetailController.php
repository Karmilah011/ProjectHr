<?php

namespace App\Http\Controllers;

use App\UserDetail;
use Illuminate\Http\Request;
use DB;
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
        // dd($userFamily[0]);
        // die;
        return view('user_detail.index',compact('userDetail','userFamily'));
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
    public function update(Request $request, UserDetail $userDetail)
    {
        //
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
