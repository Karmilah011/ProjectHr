<?php

namespace App\Http\Controllers;

use App\Struktur;
use Illuminate\Http\Request;

class StrukturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $struktur = Struktur::all();
        return view('struktur.index', compact ('struktur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('struktur.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Struktur::create($request->all());
        return redirect('/struktur');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Struktur  $struktur
     * @return \Illuminate\Http\Response
     */
    public function show(Struktur $struktur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Struktur  $struktur
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $struktur = Struktur::find($id)->first();
        return view('struktur.edit', compact('struktur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Struktur  $struktur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $struktur = Struktur::find($id);
        $struktur->update($request->all());
        return redirect('/struktur')->with(['success' => 'Struktur Telah Diperbaharui!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Struktur  $struktur
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Struktur::destroy($id);
        return redirect('/struktur');
    }
}
