<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanque extends Model
{
    protected $table='tanques';
    protected $fillable=[
        'capacidad',
        'total',
        'proyecto_id',
        'combustible_id',
    ];
}
