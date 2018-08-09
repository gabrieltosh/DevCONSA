<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;
use RealRashid\SweetAlert\Facades\Alert;
use Session;
use App\Http\Requests\RequestProyectosCreate;
use App\Http\Requests\RequestProyectosUpdate;
use  PDF;

class controllerProyectos extends Controller
{
    public function __construct()
    {
        $this->middleware('panel');
    }
    public function index()
    {
        $proyectos=Proyecto::orderBy('id','desc')->get();
        Session::flash('mensaje','Datos cargados correctamente');
        return view('panel.proyectos.index',compact('proyectos'));
    }
    public function create()
    {
        return view('panel.proyectos.create');
    }
    public function store(RequestProyectosCreate $request)
    {
        Proyecto::create([
            'nombre'=>$request->nombre,
            'longitud'=>$request->longitud,
            'numeroContrato'=>$request->numeroContrato,
            'fechaContrato'=>$request->fechaContrato,
            'monto'=>$request->monto,
            'plazo'=>$request->plazo,
            'fechaProceder'=>$request->fechaProceder
        ]);
        Alert::success('Exito!!','Registro creado correctamente');
        return redirect()->route('proyectos.index');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $proyecto=Proyecto::findOrFail($id);
        return view('panel.proyectos.edit',compact('proyecto'));
    }
    public function update(RequestProyectosUpdate $request, $id)
    {
        Proyecto::findOrFail($id)->fill([
            'nombre'=>$request->nombre,
            'longitud'=>$request->longitud,
            'numeroContrato'=>$request->numeroContrato,
            'fechaContrato'=>$request->fechaContrato,
            'monto'=>$request->monto,
            'plazo'=>$request->plazo,
            'fechaProceder'=>$request->fechaProceder
        ])->save();
        Alert::success('Exito!!','Registro editado correctamente');
        return redirect()->route('proyectos.index');
    }
    public function destroy($id)
    {
        Proyecto::findOrFail($id)->delete();
        Alert::success('Exito!!','Registro eliminado correctamente');
        return redirect()->route('proyectos.index');
    }
    public function pdf()
    {
        $proyectos=Proyecto::orderBy('created_at','desc')->get();
        $pdf = PDF::loadView('pdf.proyectos', compact('proyectos'));
        $pdf->setPaper('letter', 'landscape');
        return $pdf->download('proyectos.pdf');
    }
}
