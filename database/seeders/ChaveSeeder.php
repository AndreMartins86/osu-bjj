<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Chave;

class ChaveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $marromLeveMasculino1 = [5, 13, 21, 29, 37, 45];
        $marromLeveMasculino2 = [53, 61, 69, 77, 85, 93];

        for ($i=0; $i < 13; $i++) {
            if ($i <= 5 ) {                
                Chave::create([
                    'campeonato_id' => 10,
                    'lutador_1' => $marromLeveMasculino1[$i],
                    'lutador_2' => $marromLeveMasculino2[$i],
                    'genero_id' => 2,
                    'faixa_id' => 1,
                    'peso_id' => 1
                ]);                     
            } else {
                Chave::create([
                    'campeonato_id' => 10,           
                    'genero_id' => 2,
                    'faixa_id' => 1,
                    'peso_id' => 1
                ]);

            }            
        }       

    }
}
