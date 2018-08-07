<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
class controllerLogin extends Controller
{
    public function log(Request $request)
    {
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            return redirect()->route('panel');
        }else
        {
            Session::flash('error','El correo electronico y/o contraseña son incorrectos');
            return redirect()->route('inicio');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('inicio');
    }
}

