<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;
use App\Models\Consola;

class ConsolaController extends Controller
{
    public function crearConsola(Request $request){
        $input = $request->all();

        $consola = new Consola();
        $consola->Nombre = $input["nombre"];
        $consola->Marca = $input["marca"];
        $consola->anno = $input["anno"];

        $consola->save();
        return $consola;
    }

    public function getMarcas(){
        $marcas = ["Sony", "Microsoft", "Nintendo", "Sega"];

        return $marcas;
    }

    public function getConsolas(){
        $consolas = Consola::all();
        return $consolas;
    }

    public function eliminarConsola(Request $request){
        $input = $request->all();
        $id = $input["id"];

        $consola = Consola::findOrFail($id);

        $consola->delete();

        return "OK.";
    }
}
