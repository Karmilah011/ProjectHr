<?php

namespace App\Http\Controllers;

use App\LeaveMaster;
use Illuminate\Http\Request;

class LeaveMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leavemaster = LeaveMaster::all();
        return view('leavemaster.index', compact ('leavemaster'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('leavemaster.create');
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
     * @param  \App\LeaveMaster  $leaveMaster
     * @return \Illuminate\Http\Response
     */
    public function show(LeaveMaster $leaveMaster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LeaveMaster  $leaveMaster
     * @return \Illuminate\Http\Response
     */
    public function edit(LeaveMaster $leaveMaster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LeaveMaster  $leaveMaster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LeaveMaster $leaveMaster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LeaveMaster  $leaveMaster
     * @return \Illuminate\Http\Response
     */
    public function destroy(LeaveMaster $leaveMaster)
    {
        //
    }
}
