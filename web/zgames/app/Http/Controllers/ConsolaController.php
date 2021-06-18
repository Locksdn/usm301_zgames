<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;
use App\Models\Consola;

class ConsolaController extends Controller
{
    public function getMarcas(){
        $marcas = ["Sony", "Microsoft", "Nintendo", "Sega"];

        return $marcas;
    }

    public function getConsolas(){
        $consolas = Consola::all();
        return $consolas;
    }
}
