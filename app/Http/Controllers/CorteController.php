<?php

namespace App\Http\Controllers;

use App\Http\Requests\CorteRequest;
use Illuminate\Http\Request;
use App\Models\Cortes;
use Intervention\Image\Facades\Image;

class CorteController extends Controller
{
    //
    public function index()
    {
        return view('sections.corte-index');
    }

    public function store(CorteRequest $request)
    {
        try {
            if ($request->hasFile('imagen')) {
                $imagen = $request->file('imagen');
                $nombre_imagen = time() . '_' . $imagen->getClientOriginalName();
                $ruta_imagen = public_path().'/uploads/images/cortes/'.$nombre_imagen;
                Image::make($imagen->getRealPath())
                    ->resize(450, 600, function ($constraint) {
                        $constraint->aspectRatio();
                    })
                    ->save($ruta_imagen);
                $request->imagen = $nombre_imagen;
                $request->imagen_alt = $nombre_imagen;
            } else {
                $request->imagen = 'default-corte.jpg';
                $request->imagen_alt = 'default-corte.jpg';
            }

            Cortes::create([
                'numero_corte' => $request->numero_corte,
                'nombre' => $request->nombre,
                'colores' => $request->colores,
                'cantidad' => $request->cantidad,
                'articulos' => $request->articulos,
                'costureros' => $request->costureros,
                'imagen' => $request->imagen,
                'imagen_alt' => $request->nombre,
                'fecha' => now(),
                'estado' => 0,
                'created_at' => now(),
            ]);

            return to_route('home.index')->with('success', 'Corte creado correctamente');
        }catch (Exception $e) {
            return to_route('home.index')->with('error', 'Error al crear el corte');
        }
    }

    public function show($id)
    {
        $corte = Cortes::find($id);
        return view('sections.corte-show', ['corte' => $corte]);
    }

    public function edit($id)
    {
        $corte = Cortes::find($id);
        return view('sections.corte-edit', ['corte' => $corte]);
    }

    public function update(CorteRequest $request, $id)
    {
        try {
            $request->validated();
            if($request->hasFile('imagen')){
                $imagen = $request->file('imagen');
                $nombre_imagen = time().'_'.$imagen->getClientOriginalName();
                $ruta_imagen = public_path().'/uploads/images/cortes/'.$nombre_imagen;
                Image::make($imagen->getRealPath())
                    ->resize(450, 600, function ($constraint) {
                        $constraint->aspectRatio();
                    })
                    ->orientate()
                    ->save($ruta_imagen);
                $request->imagen = $nombre_imagen;
                $request->imagen_alt = $nombre_imagen;

                //borrar la imagen anterior si no es la default
                $corte = Cortes::find($id);
                if($corte->imagen != 'default-corte.jpg'){
                    $ruta_imagen = public_path().'/uploads/images/cortes/'.$corte->imagen;
                    unlink($ruta_imagen);
                }
            }else{
                //sino hay ninguna imagen, se deja la que ya estaba
                $corte = Cortes::find($id);
                $request->imagen = $corte->imagen;
                $request->imagen_alt = $corte->imagen_alt;
            }
            Cortes::where('id', $id)
                ->update([
                    'numero_corte' => $request->numero_corte,
                    'nombre' => $request->nombre,
                    'colores' => $request->colores,
                    'cantidad' => $request->cantidad,
                    'articulos' => $request->articulos,
                    'costureros' => $request->costureros,
                    'estado' => $request->estado,
                    'imagen' => $request->imagen,
                    'imagen_alt' => $request->imagen_alt,
                    'updated_at' => now(),
            ]);
            return redirect()->route('home.index')->with('success', 'Corte actualizado correctamente');
        }catch (Exception $e) {
            return redirect()->route('home.index')->with('error', 'Error al actualizar el corte');
        }
    }

}
