<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Proyecto;
use App\Consumo;
use App\Combustible;

class Tanque extends Model
{
    protected $table='tanques';
    protected $fillable=[
        'nombre',
        'capacidad',
        'total',
        'proyecto_id',
        'combustible_id',
    ];
    public function combustible()
    {
        return $this->belongsTo(Combustible::class,'combustible_id');
    }
    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class,'proyecto_id');
    }
    public function consumos()
    {
        return $this->hasMany(Consumo::class,'id');
    }
    public function getCapacidadjeAttribute($value)
    {
        return $value;
    }
    public function getTotalAttribute($value)
    {
        return $value;
    }
    public function getPorcentajeAttribute()
    {
        $porcentaje=(100* $this->total)/$this->capacidad;
        return $porcentaje;
    }
}
