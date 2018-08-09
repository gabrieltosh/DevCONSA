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
    public function usuario()
    {
        return $this->belongsTo(User::class,'usuario_id');
    }
    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class,'proyecto_id');
    }
}
