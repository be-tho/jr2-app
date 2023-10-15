<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticulosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //articulos seeder
        DB::table('articulos')->insert([
            [
                'id_articulo'       => '1',
                'temporada_id'      => '2',
                'nombre'            => 'Blusa',
                'descripcion'       => 'Blusa de manga corta',
                'precio'            => '3400',
                'imagen'        	=> 'default-art.jpg',
                'imagen_alt'    	=> 'Imagen por defecto del articulo',
                'created_at'        => '2023-10-10',
                'updated_at'        => now()

            ],
            [
                'id_articulo'       => '2',
                'temporada_id'      => '1',
                'nombre'            => 'Short',
                'descripcion'       => 'Short de mezclill',
                'precio'            => '4800',
                'imagen'        	=> 'default-art.jpg',
                'imagen_alt'    	=> 'Imagen por defecto del articulo',
                'created_at'        => '2023-10-10',
                'updated_at'        => now()

            ],
            [
                'id_articulo'       => '3',
                'temporada_id'      => '2',
                'nombre'            => 'Pantalón',
                'descripcion'       => 'Pantalón de jeans',
                'precio'            => '5600',
                'imagen'        	=> 'default-art.jpg',
                'imagen_alt'    	=> 'Imagen por defecto del articulo',
                'created_at'        => '2023-10-10',
                'updated_at'        => now()

            ],
            [
                'id_articulo'       => '4',
                'temporada_id'      => '2',
                'nombre'            => 'Pantalón',
                'descripcion'       => 'Pantalón de jeans',
                'precio'            => '5600',
                'imagen'        	=> 'default-art.jpg',
                'imagen_alt'    	=> 'Imagen por defecto del articulo',
                'created_at'        => '2023-10-10',
                'updated_at'        => now()

            ],
            [
                'id_articulo'       => '5',
                'temporada_id'      => '2',
                'nombre'            => 'Pantalón',
                'descripcion'       => 'Pantalón de jeans',
                'precio'            => '5600',
                'imagen'        	=> 'default-art.jpg',
                'imagen_alt'    	=> 'Imagen por defecto del articulo',
                'created_at'        => '2023-10-10',
                'updated_at'        => now()

            ],
        ]);
    }
}
