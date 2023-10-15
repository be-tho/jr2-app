<?php

namespace App\Http\Controllers;
use App\Models\Articulos;

use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    //
    public function index()
    {
        $articulos = Articulos::all();
        return view('sections.articulos-index', ['articulos' => $articulos->sortByDesc('id')]);
    }
}
