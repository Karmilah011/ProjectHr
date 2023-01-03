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
    public function edit(Form_cuti $form_cuti)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Form_cuti  $form_cuti
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form_cuti $form_cuti)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Form_cuti  $form_cuti
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form_cuti $form_cuti)
    {
        //
    }
}
