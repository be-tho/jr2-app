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
                'nombre'            => 'Body Fruce lycra',
                'descripcion'       => 'Body Fruce lycra',
                'precio'            => '2300',
                'imagen'        	=> 'bodyfrunce.jpg',
                'imagen_alt'    	=> 'Body con frunce de lycra',
                'created_at'        => '2023-10-10',
                'updated_at'        => now()

            ],
            [
                'id_articulo'       => '2',
                'temporada_id'      => '1',
                'nombre'            => 'Body Princesa Creep',
                'descripcion'       => 'Body Princesa Creep',
                'precio'            => '2750',
                'imagen'        	=> 'body-princesa.jpg',
                'imagen_alt'    	=> 'Body princesa de creep',
                'created_at'        => '2023-10-10',
                'updated_at'        => now()

            ],
            [
                'id_articulo'       => '3',
                'temporada_id'      => '2',
                'nombre'            => 'Pantalón Palazo',
                'descripcion'       => 'Pantalón Palazo Sastrero',
                'precio'            => '6500',
                'imagen'        	=> 'pantalon-sastrero.jpg',
                'imagen_alt'    	=> 'Pantalon sastrero palazo',
                'created_at'        => '2023-10-10',
                'updated_at'        => now()

            ],
            [
                'id_articulo'       => '4',
                'temporada_id'      => '2',
                'nombre'            => 'Body Fruce lycra',
                'descripcion'       => 'Body Fruce lycra',
                'precio'            => '2300',
                'imagen'        	=> 'bodyfrunce.jpg',
                'imagen_alt'    	=> 'Body con frunce de lycra',
                'created_at'        => '2023-10-10',
                'updated_at'        => now()

            ],
            [
                'id_articulo'       => '5',
                'temporada_id'      => '1',
                'nombre'            => 'Body Princesa Creep',
                'descripcion'       => 'Body Princesa Creep',
                'precio'            => '2750',
                'imagen'        	=> 'body-princesa.jpg',
                'imagen_alt'    	=> 'Body princesa de creep',
                'created_at'        => '2023-10-10',
                'updated_at'        => now()

            ],
            [
                'id_articulo'       => '6',
                'temporada_id'      => '2',
                'nombre'            => 'Pantalón Palazo',
                'descripcion'       => 'Pantalón Palazo Sastrero',
                'precio'            => '6500',
                'imagen'        	=> 'pantalon-sastrero.jpg',
                'imagen_alt'    	=> 'Pantalon sastrero palazo',
                'created_at'        => '2023-10-10',
                'updated_at'        => now()

            ],

        ]);
    }
}
