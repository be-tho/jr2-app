<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cortes;

class HomeController extends Controller
{
    public function index()
    {
        $cortes = Cortes::all();
        // retornar la vista con los datos de los cortes de forma descendente
        return view('sections.home', ['cortes' => $cortes->sortByDesc('id')]);
    }
}
