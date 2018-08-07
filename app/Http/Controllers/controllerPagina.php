<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerPagina extends Controller
{
    public function inicio()
    {
        return view('pagina.index');
    }
}
