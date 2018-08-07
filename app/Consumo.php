<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consumo extends Model
{
    protected $table='consumos';
    protected $fillable=[
        'kilometraje',
        'cantidad',
        'maquinaria_id',
        'tanque_id',
    ];
}
