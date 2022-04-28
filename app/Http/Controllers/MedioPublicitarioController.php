<?php

namespace App\Http\Controllers;

use App\Models\MedioPublicitario;
use Illuminate\Http\Request;

class MedioPublicitarioController extends Controller
{

    public function listado(Request $request){
        return view('medio_publicitario.listado');
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
     * @param  \App\Models\MedioPublicitario  $medioPublicitario
     * @return \Illuminate\Http\Response
     */
    public function show(MedioPublicitario $medioPublicitario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MedioPublicitario  $medioPublicitario
     * @return \Illuminate\Http\Response
     */
    public function edit(MedioPublicitario $medioPublicitario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MedioPublicitario  $medioPublicitario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MedioPublicitario $medioPublicitario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MedioPublicitario  $medioPublicitario
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedioPublicitario $medioPublicitario)
    {
        //
    }
}
