<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pastel;

class homeController extends Controller
{
    public function inicio()
    {
        $datos=Pastel::all();
        //dd($datos);
        return view('welcome')->with('datos',$datos);
    }

    public function detalle($id)
    {
        $dato = Pastel::find($id);
        return view('detalle')->with('dato',$dato);
    }
}
