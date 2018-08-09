<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table='proyectos';
    protected $fillable=[
        'nombre',
        'longitud',
        'numeroContrato',
        'fechaContrato',
        'monto',
        'plazo',
        'fechaProceder'
    ];
    public function getPlazoAttribute($value)
    {
        return $value;
    }
    public function getFechaContratoAttribute($value)
    {
        return $value;
    }
    public function getTimeAttribute()
    {
        $fecha=date($this->fechaContrato);
        $suma=strtotime('+'.$this->plazo.'month',strtotime($fecha));
        return date('Y-m-j',$suma);
    }
    public function asignaciones()
    {
        return $this->hasMany(AsignacionMaquinaria::class,'id');
    }
    public function asignacionesUser()
    {
        return $this->hasMany(AsignacionUser::class,'id');
    }
}
