<?php

namespace App\Http\Controllers;
use App\Models\Articulos;
use App\Models\Temporadas;

use Illuminate\Http\Request;
use App\Http\Requests\ArticuloRequest;

class ArticuloController extends Controller
{
    //
    public function index()
    {
        $articulos = Articulos::where('temporada_id', 2)
        ->orderBy('id_articulo', 'desc')->paginate(10);
        return view('sections.articulos-index', ['articulos' => $articulos]);
    }

    public function create()
    {
        $temporadas = Temporadas::all();
        return view('sections.articulos-create', ['temporadas' => $temporadas]);
    }

    public function store(ArticuloRequest $request)
    {
        try{
            if($request->hasFile('imagen')){
                $file = $request->file('imagen');
                $name = time().$file->getClientOriginalName();
                $file->move(public_path().'/images/', $name);
            }
            $validated = $request->validated();

            Articulos::create([
                'nombre' => $request->nombre,
                'descripcion' => $request->descripcion,
                'precio' => $request->precio,
                'imagen' => $request->imagen,
                //generar el alt de la imagen con el nombre
                'imagen_alt' => $request->nombre,
                'created_at' => now(),
            ]);
        } catch (\Exception $e) {
            return back()->with('error', 'Error al subir la imagen');
        }
    }

    public function show($id)
    {
        $articulo = Articulos::where('id_articulo', $id)->first();
        return view('sections.articulos-show', ['articulo' => $articulo]);
    }

}
