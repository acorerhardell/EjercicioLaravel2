<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function guarda(Request $r)
    {
        dd($r->nombre.' '.$r->apellidop.' '.$r->apellidom);
    }

    public function detalle($id)
    {
        return "Hola esta es la pagina para mostrar ".$id;
    }
}
