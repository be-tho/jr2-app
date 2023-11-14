<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DolarController extends Controller
{
    public function index()
    {
        $dolarUno = file_get_contents('https://dolarapi.com/v1/dolares/blue');
        $dolarUno = json_decode($dolarUno, true);
        $dolarBlue = $dolarUno['venta'];

        $dolarDos = file_get_contents('https://dolarapi.com/v1/dolares/oficial');
        $dolarDos = json_decode($dolarDos, true);
        $dolarOficial = $dolarDos['venta'];

        //dolar intermedio es la suma de dolar oficial mas el dolar blue dividido 2 parseado a float
        $dolarTres = floatval($dolarOficial) + floatval($dolarBlue);
        $dolarIntermedio = $dolarTres / 2;

        return view('sections.dolar-index', ['dolarOficial' => $dolarOficial, 'dolarBlue' => $dolarBlue, 'dolarIntermedio' => $dolarIntermedio]);
    }
}
