<?php

namespace App\Http\Controllers;
use App\Models\Articulos;
use App\Models\Temporadas;
use Intervention\Image\Facades\Image;

use Illuminate\Http\Request;
use App\Http\Requests\ArticuloRequest;

class ArticuloController extends Controller
{
    //
    public function index()
    {
//        $articulos = Articulos::where('temporada_id', 2)
        $articulos = Articulos::orderBy('id_articulo', 'desc')->paginate(10);
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
                $imagen = $request->file('imagen');
                $nombre_imagen = time().'_'.$imagen->getClientOriginalName();
                $ruta_imagen = public_path().'/uploads/images/articulos/'.$nombre_imagen;
                Image::make($imagen->getRealPath())
                    ->resize(300, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })
                    ->save($ruta_imagen);
                $request->imagen = $nombre_imagen;
                $request->imagen_alt = $nombre_imagen;
            }else{
                $request->imagen = 'default.jpg';
                $request->imagen_alt = 'default.jpg';
            }

            Articulos::create([
                'temporada_id' => $request->temporada_id,
                'nombre' => $request->nombre,
                'descripcion' => $request->descripcion,
                'precio' => $request->precio,
                'imagen' => $request->imagen,
                'imagen_alt' => $request->nombre,
                'created_at' => now(),
            ]);
            return redirect()->route('articulo.index')->with('success', 'Articulo creado correctamente');
        } catch (\Exception $e) {
            return redirect()->route('articulo.index')->with('error', 'Error al crear el articulo');
        }
    }

    public function show($id)
    {
        $articulo = Articulos::where('id_articulo', $id)->first();
        return view('sections.articulos-show', ['articulo' => $articulo]);
    }

    public function edit($id)
    {
        $articulo = Articulos::where('id_articulo', $id)->first();
        $temporadas = Temporadas::all();
        return view('sections.articulos-edit', ['articulo' => $articulo, 'temporadas' => $temporadas]);
    }

    public function update(ArticuloRequest $request, $id)
    {
        try {
            $request->validated();
            if ($request->hasFile('imagen')){
                $imagen = $request->file('imagen');
                $nombre_imagen = time().'_'.$imagen->getClientOriginalName();
                $ruta_imagen = public_path().'/uploads/images/articulos/'.$nombre_imagen;
                Image::make($imagen->getRealPath())
                    ->resize(300, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })
                    ->save($ruta_imagen);
                $request->imagen = $nombre_imagen;
                $request->imagen_alt = $nombre_imagen;
            }else{
//                sino hay ninguna imagen mantenemos la que ya tenia
                $articulo = Articulos::where('id_articulo', $id)->first();
                $request->imagen = $articulo->imagen;
                $request->imagen_alt = $articulo->imagen_alt;
            }
            Articulos::where('id_articulo', $id)
                ->update([
                    'temporada_id' => $request->temporada_id,
                    'nombre' => $request->nombre,
                    'descripcion' => $request->descripcion,
                    'precio' => $request->precio,
                    'imagen' => $request->imagen,
                    'imagen_alt' => $request->nombre,
                    'updated_at' => now(),
                ]);

            return redirect()->route('articulo.index')->with('success', 'Articulo actualizado correctamente');
        }catch (\Exception $e) {
            return redirect()->route('articulo.index')->with('error', 'Error al actualizar el articulo');
        }
    }

}
