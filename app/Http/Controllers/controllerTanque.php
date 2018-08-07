<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tanque;
use RealRashid\SweetAlert\Facades\Alert;
use Session;
use App\Http\Requests\RequestTanqueCreate;
use App\Http\Requests\RequestTanqueUpdate;
use App\Proyecto;
use App\Combustible;
class controllerTanque extends Controller
{
    public function __construct()
    {
        $this->middleware('panel');
    }
    public function index()
    {
        $tanques=Tanque::orderBy('id','desc')->get();
        Session::flash('mensaje','Datos cargados correctamente');
        return view('panel.tanques.index',compact('tanques'));
    }
    public function create()
    {
        $proyectos=Proyecto::orderBy('id','desc')->pluck('nombre','id');
        $combustibles=Combustible::orderBy('id','desc')->pluck('tipo','id');
        return view('panel.tanques.create',compact('combustibles','proyectos'));
    }
    public function store(RequestTanqueCreate $request)
    {
        Tanque::create([
            'capacidad'=>$request->capacidad,
            'total'=>$request->capacidad,
            'proyecto_id'=>$request->proyecto_id,
            'combustible_id'=>$request->combustible_id,
        ]);
        Alert::success('Exito!!','Registro creado correctamente');
        return redirect()->route('contenedores.index');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $tanque=Tanque::findOrFail($id);
        $proyectos=Proyecto::orderBy('id','desc')->pluck('nombre','id');
        $combustibles=Combustible::orderBy('id','desc')->pluck('tipo','id');
        return view('panel.tanques.edit',compact('combustibles','proyectos','tanque'));
    }
    public function update(RequestTanqueUpdate $request, $id)
    {
        Tanque::findOrFail($id)->fill([
            'capacidad'=>$request->capacidad,
            'total'=>$request->capacidad,
            'proyecto_id'=>$request->proyecto_id,
            'combustible_id'=>$request->combustible_id,
        ])->save();
        Alert::success('Exito!!','Registro editado correctamente');
        return redirect()->route('contenedores.index');
    }
    public function destroy($id)
    {
        Tanque::findOrFail($id)->delete();
        Alert::success('Exito!!','Registro eliminado correctamente');
        return redirect()->route('contenedores.index');
    }
}
