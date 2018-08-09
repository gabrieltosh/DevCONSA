<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Maquinaria;
use Session;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\RequestGerenteCreate;
use App\Http\Requests\RequestGerenteUpdate;
use  PDF;
class controllerAdministradores extends Controller
{
    public function __construct()
    {
        $this->middleware('panel');
    }
    public function index()
    {
        $usuarios=User::where('tipo','administrador')->get();
        Session::flash('mensaje','Datos cargados correctamente');
        return view('panel.administradores.index',compact('usuarios'));
    }
    public function create()
    {
        //$maquinarias=Maquinaria::orderBy('id','desc')->pluck('placa','id');
        return view('panel.administradores.create');
    }
    public function store(RequestGerenteCreate $request)
    {
        User::create([
            'nombre'=>$request->nombre,
            'apellido'=>$request->apellido,
            'ci'=>$request->ci,
            'telefono'=>$request->telefono,
            'cargo'=>$request->cargo,
            'nacimiento'=>$request->nacimiento,
            'genero'=>$request->genero,
            'email'=>$request->email,
            'direccion'=>$request->direccion,
            'tipo'=>'administrador',
            'imagen'=>$request->imagen,
            'password'=>$request->password,
            'activo'=>1,
            //'maquinaria_id'=>$request->mquinaria_id,
        ]);
        Alert::success('Exito!!','Registro creado correctamente');
        return redirect()->route('administradores.index');
    }
    public function show($id)
    {
        $usuario=User::findOrFail($id);
        if($usuario->activo==1)
        {
            $usuario->fill([
                'activo'=>0,
            ]);
        }else
        {
            $usuario->fill([
                'activo'=>1,
            ]);
        }
        $usuario->save();
        Alert::success('Exito!!','Estado cambiado correctamente');
        return redirect()->route('administradores.index');
    }
    public function edit($id)
    {
        //$maquinarias=Maquinaria::orderBy('id','desc')->pluck('placa','id');
        $usuario=User::findOrFail($id);
        return view('panel.administradores.edit',compact('usuario'));
    }
    public function update(RequestGerenteUpdate $request, $id)
    {
        User::findOrFail($id)->fill([
            'nombre'=>$request->nombre,
            'apellido'=>$request->apellido,
            'ci'=>$request->ci,
            'telefono'=>$request->telefono,
            'cargo'=>$request->cargo,
            'nacimiento'=>$request->nacimiento,
            'genero'=>$request->genero,
            'email'=>$request->email,
            'direccion'=>$request->direccion,
            'tipo'=>'administrador',
            'imagen'=>$request->imagen,
            'password'=>$request->password,
            'activo'=>1,
            //'maquinaria_id'=>$request->maquinaria_id,
        ])->save();
        Alert::success('Exito!!','Registro editado correctamente');
        return redirect()->route('administradores.index');
    }
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        Alert::success('Exito!!','Registro eliminado correctamente');
        return redirect()->route('administradores.index');
    }
    public function pdf()
    {
        $usuarios=User::where('tipo','administrador')->orderBy('created_at','desc')->get();
        $pdf = PDF::loadView('pdf.administradores', compact('usuarios'));
        $pdf->setPaper('letter', 'landscape');
        return $pdf->download('administradores.pdf');
    }
}
