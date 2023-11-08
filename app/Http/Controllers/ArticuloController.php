<?php

namespace App\Http\Controllers;
use App\Models\Articulos;

use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    //
    public function index()
    {
        $articulos = Articulos::paginate(10);
        return view('sections.articulos-index', ['articulos' => $articulos]);
    }

}
