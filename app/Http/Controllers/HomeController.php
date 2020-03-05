<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pastel;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function inicio()
    {
        $datos = Pastel::all();
        //dd($datos);
        return view('welcome')->with('datos', $datos);
    }

    public function guarda(Request $r){
        //dd($r->Nombre." ".$r->ApPaterno." ".$r->ApMaterno." ".$r->Clave);
        return $r->Nombre." ".$r->ApPaterno." ".$r->ApMaterno." ".$r->Clave;
    }

    public function detalle($id){
        return "Hola, esta es la pagina para mostrar ".$id;
    }

    public function detallePastel($id){
        $dato=Pastel::find($id);
        return view("detallepastel")->with('d', $dato);
    }
}
