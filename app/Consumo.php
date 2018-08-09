<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tanque;

class Consumo extends Model
{
    protected $table='consumos';
    protected $fillable=[
        'kilometraje',
        'cantidad',
        'usuario_id',
        'administrador_id',
        'tanque_id',
        'proyecto_id',
    ];
    public function tanque()
    {
        return $this->belongsTo(Tanque::class,'tanque_id');
    }
    public function usuario()
    {
        return $this->belongsTo(User::class,'usuario_id');
    }
    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class,'proyecto_id');
    }
}
