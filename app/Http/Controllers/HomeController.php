<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cortes;

class HomeController extends Controller
{
    public function index()
    {
        //traer todos los Cortes de la base de datos ordenarlos de forma descendente y paginarlos de 2 en 2
        $cortes = Cortes::orderBy('id', 'desc')->paginate(6);

        return view('sections.home', ['cortes' => $cortes]);
    }
}
