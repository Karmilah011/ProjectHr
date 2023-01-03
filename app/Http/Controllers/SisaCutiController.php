<?php

namespace App\Http\Controllers;

use App\Sisa_cuti;
use Illuminate\Http\Request;

class SisaCutiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scuti = Sisa_cuti::all();
        return view('scuti.index', compact ('scuti'));
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
     * @param  \App\Sisa_cuti  $sisa_cuti
     * @return \Illuminate\Http\Response
     */
    public function show(Sisa_cuti $sisa_cuti)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sisa_cuti  $sisa_cuti
     * @return \Illuminate\Http\Response
     */
    public function edit(Sisa_cuti $sisa_cuti)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sisa_cuti  $sisa_cuti
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sisa_cuti $sisa_cuti)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sisa_cuti  $sisa_cuti
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sisa_cuti $sisa_cuti)
    {
        //
    }
}
