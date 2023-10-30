<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Resultado;

class ResultadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    // campeonato_id faixa_id peso_id primeiroColocado segundoColocado terceiroColocado created_at  updated_at
        
            Resultado::create([
            'campeonato_id' => 13,
            'genero_id' => 2,
            'faixa_id' =>  1,
            'peso_id' => 1,
            'primeiroColocado' => 5,
            'segundoColocado' => 29,
            'terceiroColocado' => 93
        ]);
    }
}
