<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Campania extends Model
{
    use HasFactory;
    

    use SoftDeletes;

    protected $fillable = [
        'creador_id',
        'modificador_id',
        'eliminador_id',
        'nombre',
        'fecha_inicio',
        'fecha_fin',
        'url',
        'descripcion',
        'estado',
        'deleted_at',
    ];
    
    // public function guarda($datos){

    //     // var_dump($datos);

    //     dd($datos->nombre_campania);
    //     // dd($datos->nombre_campania);

    //     $campania = new Campania();

    //     $campania->nombre = $datos->input('nombre_campania');

    //     $campania->save();
    // }
}
