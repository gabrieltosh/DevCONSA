<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;
use Session;
use App\AsignacionUser;
use App\User;
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
        $usuarios=User::all();
        $proyecto=Proyecto::where('id',$id)->first();
        $asignaciones=AsignacionUser::where('proyecto_id',$id)->get();
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
        return view('panel.asignacion.personal',compact('usuarios','asignaciones','proyecto'));
    }
    public function asigUsuario($proyecto,$user)
    {
        AsignacionUser::create([
            'usuario_id'=>$user,
            'proyecto_id'=>$proyecto
        ]);
        return redirect()->route('asigPersonal',$proyecto);
    }
    public function asigDelete($asignacion,$proyecto)
    {
        AsignacionUser::find($asignacion)->delete();
        return redirect()->route('asigPersonal',$proyecto);
    }
}
