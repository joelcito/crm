<?php

namespace App\Http\Controllers;

use App\Models\MedioSeguimiento;
use Illuminate\Http\Request;

class MedioSeguimientoController extends Controller
{

    public function listado(Request $request){

        return view('medio_seguimiento.listado');
        
    }
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
     * @param  \App\Models\MedioSeguimiento  $medioSeguimiento
     * @return \Illuminate\Http\Response
     */
    public function show(MedioSeguimiento $medioSeguimiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MedioSeguimiento  $medioSeguimiento
     * @return \Illuminate\Http\Response
     */
    public function edit(MedioSeguimiento $medioSeguimiento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MedioSeguimiento  $medioSeguimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MedioSeguimiento $medioSeguimiento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MedioSeguimiento  $medioSeguimiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedioSeguimiento $medioSeguimiento)
    {
        //
    }
}
