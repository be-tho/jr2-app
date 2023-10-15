<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TemporadaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('temporadas')->insert([
            [
                'id' => 1,
                'nombre' => 'Invierno 2023',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'nombre' => 'Verano 2024',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
        //
    }
}
