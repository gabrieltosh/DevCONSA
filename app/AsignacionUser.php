<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsignacionUser extends Model
{
    protected $table='asignacion_users';
    protected $fillable=[
        'usuario_id',
        'proyecto_id',
    ];
}
