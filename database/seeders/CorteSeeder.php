<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CorteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // corte table de corte
        DB::table('cortes')->insert([
            [
                'nombre'            => 'Lurex',
                'cantidad'          => '125',
                'articulos'         => '#124, #125, #126',
                'costureros'        => 'Maria, Juan, Pedro',
                'fecha'             => '2021-10-10',
                'estado'            => '0',
                'created_at'        => '2023-10-10',
                'imagen'        		=> 'default.jpg',
                'imagen_alt'    		=> 'Imagen por defecto del corte',
                'updated_at'        => now()

            ],
            [
                'nombre'            => 'Modal',
                'cantidad'          => '534',
                'articulos'         => '#434, #025, #086',
                'costureros'        => 'Maria, Juan, Pedro',
                'fecha'             => '2021-10-10',
                'estado'            => '1',
                'created_at'        => '2023-10-10',
                'imagen'        		=> 'default.jpg',
                'imagen_alt'    		=> 'Imagen por defecto del corte',
                'updated_at'        => now()
            ],
            [
                'nombre'            => 'Modal',
                'cantidad'          => '390',
                'articulos'         => '#234, #105, #350',
                'costureros'        => 'Julia, Maria, Luis',
                'fecha'             => '2021-10-10',
                'estado'            => '2',
                'created_at'        => '2023-10-10',
                'imagen'        		=> 'default.jpg',
                'imagen_alt'    		=> 'Imagen por defecto del corte',
                'updated_at' => now()
            ]
        ]);
    }
}
