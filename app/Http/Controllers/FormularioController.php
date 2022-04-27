<?php

namespace App\Http\Controllers;

use App\Models\Pregunta;
use App\Models\Formulario;
use App\Models\ValorCombo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormularioController extends Controller
{

    public function guardaFormulario(Request $request){


        $formulario = new Formulario();

        // $formulario->Creador_id         = Auth()::user()->id;
        $formulario->nombre             = $request->input('nombre_formulario');
        $formulario->descripcion        = $request->input('descripcion_formulario');

        $formulario->save();

        $componetes = $request->input('componente_tipo');
        $preguntas = $request->input('nombre_pregunta');

        foreach($componetes as $key => $co){
            
            $pregunta  = new Pregunta();

            $pregunta->nombre           = $preguntas[$key];
            $pregunta->formulario_id    = $formulario->id;

            echo $co." ".$preguntas[$key]."<br>";

            $pregunta->save();

            if($co == "select" || $co == "checkbox" ){

                $valorCombo = new ValorCombo();

                $valorCombo->valor = 

                $valorCombo->save();
                
            }else{

            }
        }

        dd($request->all());

        // dd($formulario->id);
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
     * @param  \App\Models\Formulario  $formulario
     * @return \Illuminate\Http\Response
     */
    public function show(Formulario $formulario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Formulario  $formulario
     * @return \Illuminate\Http\Response
     */
    public function edit(Formulario $formulario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Formulario  $formulario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Formulario $formulario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Formulario  $formulario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formulario $formulario)
    {
        //
    }
}
