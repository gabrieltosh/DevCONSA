<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\AsignacionMaquinaria;
use App\Combustible;
use App\User;

class Maquinaria extends Model
{
    protected $table='maquinarias';
    protected $fillable=[
        'imagen',
        'placa',
        'modelo',
        'color',
        'marca',
        'kilometraje',
        'capacidad',
        'detalle',
        'estado',
        'tipo',
        'activo',
        'combustible_id'
    ];
    public function setImagenAttribute($imagen){
        if(! empty($imagen)){
              $name = Carbon::now()->second.$imagen->getClientOriginalName();
              $this->attributes['imagen'] = $name;
              \Storage::disk('maquinarias')->put($name, \File::get($imagen));
        }
    }
    public function asignaciones()
    {
        return $this->hasMany(AsignacionMaquinaria::class,'id');
    }
    public function combustible()
    {
        return $this->belongsTo(Combustible::class,'combustible_id');
    }
    public function users()
    {
        return $this->hasMany(User::class,'id');
    }
    public function consumos()
    {
        return $this->hasMany(Consumo::class,'id');
    }

}
