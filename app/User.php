<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;
use App\Maquinaria;
use App\AsignacionUser;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'apellido',
        'ci',
        'telefono',
        'cargo',
        'nacimiento',
        'genero',
        'email',
        'direccion',
        'tipo',
        'imagen',
        'password',
        'activo',
        'maquinaria_id',
    ];
    public function maquinaria()
    {
        return $this->belongsTo(Maquinaria::class,'maquinaria_id');
    }
    public function asignaciones()
    {
        return $this->hasMany(AsignacionUser::class.'id');
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function setImagenAttribute($imagen){
        if(! empty($imagen)){
              $name = Carbon::now()->second.$imagen->getClientOriginalName();
              $this->attributes['imagen'] = $name;
              \Storage::disk('usuarios')->put($name, \File::get($imagen));
        }
    }
    public function setPasswordAttribute($valor){
    if(!empty($valor)){
            $this->attributes['password'] = \Hash::make($valor);
        }
    }
}
