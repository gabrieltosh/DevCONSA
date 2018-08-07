<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Combustible;
use RealRashid\SweetAlert\Facades\Alert;
use Session;
use App\Http\Requests\RequestCombustibleCreate;
use App\Http\Requests\RequestCombustibleUpdate;

class controllerCombustible extends Controller
{
    public function __construct()
    {
        $this->middleware('panel');
    }
    public function index()
    {
        $combustibles=Combustible::orderBy('id','desc')->get();
        Session::flash('mensaje','Datos cargados correctamente');
        return view('panel.combustibles.index',compact('combustibles'));
    }
    public function create()
    {
        return view('panel.combustibles.create');
    }
    public function store(RequestCombustibleCreate $request)
    {
        Combustible::create(
            [
                'tipo'=>$request->tipo,
                'precio'=>$request->precio,
                'descripcion'=>$request->descripcion,
            ]
        );
        Alert::success('Exito!!','Registro creado correctamente');
        return redirect()->route('combustibles.index');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $combustible=Combustible::findOrFail($id);
        return view('panel.combustibles.edit',compact('combustible'));
    }
    public function update(RequestCombustibleUpdate $request, $id)
    {
        Combustible::findOrFail($id)->fill([
            'tipo'=>$request->tipo,
            'precio'=>$request->precio,
            'descripcion'=>$request->descripcion,
        ])->save();
        Alert::success('Exito!!','Registro editado correctamente');
        return redirect()->route('combustibles.index');
    }
    public function destroy($id)
    {
        Combustible::findOrFail($id)->delete();
        Alert::success('Exito!!','Registro eliminado correctamente');
        return redirect()->route('combustibles.index');
    }
}
