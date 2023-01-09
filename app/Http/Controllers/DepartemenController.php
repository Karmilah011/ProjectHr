<?php

namespace App\Http\Controllers;

use App\Departemen;
use Illuminate\Http\Request;

class DepartemenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dptm = Departemen::all();
        return view('departemen.index', compact ('dptm'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departemen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Departemen::create($request->all());
        return redirect('/departemen');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Departemen  $departemen
     * @return \Illuminate\Http\Response
     */
    public function show(Departemen $departemen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Departemen  $departemen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dptm = Departemen::find($id)->first();
        return view('departemen.edit', compact('dptm'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Departemen  $departemen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dptm = Departemen::find($id);
        $dptm->update($request->all());
        return redirect('/departemen')->with(['success' => 'Departemen Diperbaharui!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Departemen  $departemen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Departemen::destroy($id);
        return redirect('/departemen');
    }
}
