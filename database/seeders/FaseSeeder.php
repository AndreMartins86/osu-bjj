<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB:table('fases')->insert([
            'fase' => 'Inscrições Abertas'
        ]);

         DB:table('fases')->insert([
            'fase' => 'Chaves de Luta'
        ]);

          DB:table('fases')->insert([
            'fase' => 'Resultados'
        ]);
    }
}
