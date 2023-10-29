<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResultadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    // campeonato_id faixa_id peso_id primeiroColocado segundoColocado terceiroColocado created_at  updated_at        

        for ($i=1; $i< 3 ; $i++) {
            Resultado::create([
            'campeonato_id' => '12',
            'genero_id' => $i,
            'faixa_id' =>  $i,
            'peso_id' => $i,
            'primeiroColocado' => '1',
            'segundoColocado' => '1',
            'terceiroColocado' => '1',
        ]);
            
        }
    }
}
