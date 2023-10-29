<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipos')->insert([
                'tipo' => 'Kimono'                
            ]);
        DB::table('tipos')->insert([
                'tipo' => 'No-Gi'
            ]);
    }
}
