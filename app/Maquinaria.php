<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
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
}
