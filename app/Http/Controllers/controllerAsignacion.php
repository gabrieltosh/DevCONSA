<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;
use Session;
use App\AsignacionUser;
use App\AsignacionMaquinaria;
use App\User;
use Illuminate\Support\Facades\DB;
use  PDF;

class controllerAsignacion extends Controller
{
    public function index()
    {
        $proyectos=Proyecto::all();
        Session::flash('mensaje','Datos cargados correctamente');
        return view('panel.asignacion.index',compact('proyectos'));
    }
    public function buscar(Request $request)
    {
        $proyectos=Proyecto::where('nombre','like','%'.$request->buscar.'%')->orWhere('numeroContrato','like','%'.$request->buscar.'%')->get();
        $value=$request->buscar;
        Session::flash('mensaje','Datos cargados correctamente');
        return view('panel.asignacion.index',compact('proyectos','value'));
    }
    public function personal($id)
    {
        $usuarios=User::where('activo',1)->get();
        $proyecto=Proyecto::where('id',$id)->first();
        $asignaciones=AsignacionUser::where('proyecto_id',$id)->get();
        $maquinarias=AsignacionMaquinaria::where('proyecto_id',$id)->get();
        foreach($asignaciones as $asignacion)
        {
            foreach($usuarios as $usuario)
            {
                if($usuario->id==$asignacion->usuario_id)
                {
                    $usuario['uso']=true;
                }
            }
        }
        return view('panel.asignacion.personal',compact('usuarios','asignaciones','proyecto','maquinarias'));
    }
    public function asigUsuario($proyecto,$user)
    {
        AsignacionUser::create([
            'usuario_id'=>$user,
            'proyecto_id'=>$proyecto
        ]);
        $usuario=User::find($user);
        if(!is_null($usuario->maquinaria_id))
        {
            AsignacionMaquinaria::create(
                [
                    'maquinaria_id'=>$usuario->maquinaria_id,
                    'proyecto_id'=>$proyecto,
                ]);
        }
        return redirect()->route('asigPersonal',$proyecto);
    }
    public function asigDelete($asignacion,$proyecto)
    {
        $asignacion=AsignacionUser::find($asignacion);
        $usuario=User::find($asignacion->usuario_id);
        $asigMaquinaria=AsignacionMaquinaria::where('maquinaria_id',$usuario->maquinaria_id)->where('proyecto_id',
        $proyecto)->delete();
        $asignacion->delete();
        return redirect()->route('asigPersonal',$proyecto);
    }
}
