<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsignacionMaquinaria extends Model
{
    protected $table='asignacion_maquinarias';
    protected $fillable=[
        'maquinaria_id',
        'proyecto_id'
    ];

}
