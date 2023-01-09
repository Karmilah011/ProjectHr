<?php

namespace App\Http\Controllers;

use App\Form_cuti;
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
        $fcuti = Form_cuti::all();
        return view('fcuti.index', compact ('fcuti'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fcuti.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Form_cuti::create($request->all());
        return redirect('/fcuti');
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
        $fcuti = Form_cuti::find($id);
        $fcuti->update($request->all());
        return redirect('/fcuti')->with(['success' => 'Data Cuti Diperbaharui!']);
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
