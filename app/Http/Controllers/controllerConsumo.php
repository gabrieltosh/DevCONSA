<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Consumo;
use App\Proyecto;
use Session;
use Auth;
use App\AsignacionUser;
use App\Tanque;
use App\Maquinaria;
use  PDF;

class controllerConsumo extends Controller
{
    public function consumo($proyecto)
    {
        $asignaciones=AsignacionUser::where('proyecto_id',$proyecto)->get();
        $usuarios=array();
        foreach($asignaciones as $asignacion)
        {
            $personal=User::where('id',$asignacion->usuario_id)->first();
            if(!is_null($personal->maquinaria_id))
            {
                array_push($usuarios,$personal);
            }
        }
        $proyecto=Proyecto::where('id',$proyecto)->first();
        $tanques=Tanque::where('proyecto_id',$proyecto->id)->get();
        $consumos=Consumo::where('proyecto_id',$proyecto->id)->orderBy('id','asc')->get();
        Session::flash('mensaje','Datos cargados correctamente');
        return view('panel.consumo.consumo',compact('proyecto','usuarios','tanques','consumos'));
    }
    public function proyectos()
    {
        $asignaciones=AsignacionUser::where('usuario_id',Auth::user()->id)->get();
        $proyectos=array();
        foreach($asignaciones as $asignacion)
        {
            $p=Proyecto::where('id',$asignacion->proyecto_id)->first();
            array_push($proyectos,$p);
        }
        Session::flash('mensaje','Datos cargados correctamente');
        return view('panel.consumo.proyectos',compact('proyectos'));
    }
    public function consumoSave(Request $request,$proyecto_id,$usuario_id,$tanque_id)
    {
        $tanque=Tanque::find($tanque_id);
        $tanque->total=$tanque->total-$request->consumo;
        $tanque->save();
        $maquinaria=Maquinaria::find(User::find($usuario_id)->maquinaria_id)->fill([
            'kilometraje'=>$request->kilometraje,
        ])->save();
        Consumo::create([
            'kilometraje'=>$request->kilometraje,
            'cantidad'=>$request->consumo,
            'usuario_id'=>$usuario_id,
            'administrador_id'=>Auth::user()->id,
            'tanque_id'=>$tanque_id,
            'proyecto_id'=>$proyecto_id,
        ]);
        return redirect()->route('consumo',$proyecto_id);
    }
    public function buscar(Request $request)
    {
        $asignaciones=AsignacionUser::where('usuario_id',Auth::user()->id)->get();
        $proyectos=array();
        foreach($asignaciones as $asignacion)
        {
            $p=Proyecto::where('id',$asignacion->proyecto_id)->where('nombre','like','%'.$request->buscar.'%')->orWhere('numeroContrato','like','%'.$request->buscar.'%')->first();
            if(!is_null($p))
            {
                array_push($proyectos,$p);
            }
        }
        $value=$request->buscar;
        Session::flash('mensaje','Datos cargados correctamente');
        return view('panel.consumo.proyectos',compact('proyectos','value'));
    }
}
