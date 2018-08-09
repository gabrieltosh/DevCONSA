<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maquinaria;
use RealRashid\SweetAlert\Facades\Alert;
use Session;
use App\Http\Requests\RequestMaquinariaCreate;
use App\Http\Requests\RequestMaquinariaUpdate;
use App\Combustible;
use  PDF;

class controllerMaquinaria extends Controller
{
    public function __construct()
    {
        $this->middleware('panel');
    }
    public function index()
    {
        $maquinarias=Maquinaria::orderBy('id','desc')->get();
        Session::flash('mensaje','Datos cargados correctamente');
        return view('panel.maquinarias.index',compact('maquinarias'));
    }
    public function create()
    {
        $combustibles=Combustible::orderBy('id','desc')->pluck('tipo','id');
        return view('panel.maquinarias.create',compact('combustibles'));
    }
    public function store(RequestMaquinariaCreate $request)
    {
        Maquinaria::create([
            'imagen'=>$request->imagen,
            'placa'=>$request->placa,
            'modelo'=>$request->modelo,
            'color'=>$request->color,
            'marca'=>$request->marca,
            'kilometraje'=>$request->kilometraje,
            'capacidad'=>$request->capacidad,
            'detalle'=>$request->detalle,
            'tipo'=>$request->tipo,
            'activo'=>1,
            'combustible_id'=>$request->combustible_id
        ]);
        Alert::success('Exito!!','Registro creado correctamente');
        return redirect()->route('maquinarias.index');
    }
    public function show($id)
    {
        $maquinaria=Maquinaria::findOrFail($id);
        if($maquinaria->activo==1)
        {
            $maquinaria->fill([
                'activo'=>0,
            ]);
        }else
        {
            $maquinaria->fill([
                'activo'=>1,
            ]);
        }
        $maquinaria->save();
        Alert::success('Exito!!','Estado cambiado correctamente');
        return redirect()->route('maquinarias.index');
    }
    public function edit($id)
    {
        $combustibles=Combustible::orderBy('id','desc')->pluck('tipo','id');
        $maquinaria=Maquinaria::findOrFail($id);
        return view('panel.maquinarias.edit',compact('maquinaria','combustibles'));
    }
    public function update(RequestMaquinariaUpdate $request, $id)
    {
        Maquinaria::findOrFail($id)->fill([
            'imagen'=>$request->imagen,
            'placa'=>$request->placa,
            'modelo'=>$request->modelo,
            'color'=>$request->color,
            'marca'=>$request->marca,
            'kilometraje'=>$request->kilometraje,
            'capacidad'=>$request->capacidad,
            'detalle'=>$request->detalle,
            'activo'=>1,
            'tipo'=>$request->tipo,
            'combustible_id'=>$request->combustible_id
        ])->save();
        Alert::success('Exito!!','Registro editado correctamente');
        return redirect()->route('maquinarias.index');
    }
    public function destroy($id)
    {
        Maquinaria::findOrFail($id)->delete();
        Alert::success('Exito!!','Registro eliminado correctamente');
        return redirect()->route('maquinarias.index');
    }
    public function pdf()
    {
        $maquinarias=Maquinaria::orderBy('created_at','desc')->get();
        $pdf = PDF::loadView('pdf.maquinarias', compact('maquinarias'));
        $pdf->setPaper('letter', 'landscape');
        return $pdf->download('maquinarias.pdf');
    }
}
