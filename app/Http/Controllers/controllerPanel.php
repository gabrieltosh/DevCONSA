<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
class controllerPanel extends Controller
{
    public function __construct()
    {
        $this->middleware('panel');
    }
    public function inicio()
    {
        Session::flash('mensaje','Bienvenido de regreso '.ucwords(Auth::user()->nombre));
        return view('panel.index');
    }
}
