<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Combustible extends Model
{
    protected $table='combustibles';
    protected $fillable=[
        'tipo',
        'precio',
        'descripcion'
    ];
}
