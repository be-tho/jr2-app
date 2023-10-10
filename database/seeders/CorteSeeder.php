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
        DB::table('corte')->insert([
            'id_corte' => '1',
            'nombre' => 'Lurex',
            'cantidad' => '125',
            'articulos' => '#124, #125, #126',
            'costureros' => 'Maria, Juan, Pedro',
            'fecha' => '2021-10-10',
            'estado' => '0',
            'created_at' => '2021-10-10',
            'updated_at' => now()
        ]);
    }
}
