<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Maquinaria;
use App\Proyecto;
class AsignacionMaquinaria extends Model
{
    protected $table='asignacion_maquinarias';
    protected $fillable=[
        'maquinaria_id',
        'proyecto_id'
    ];

    public function maquinaria()
    {
        return $this->belongsTo(Maquinaria::class,'maquinaria_id');
    }
    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class,'proyecto_id');
    }

}
