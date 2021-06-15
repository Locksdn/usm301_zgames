<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsolaController extends Controller
{
    public function getMarcas(){
        $marcas = ["Sony", "Microsoft", "Nintendo", "Sega"];

        return $marcas;
    }
}
