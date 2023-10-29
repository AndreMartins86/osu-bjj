<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Atleta;

class AtletaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $equipes = [
            'Cobra Kai',
            'Mugiwara',
            'Miyagi Dojo',
            'Shotokan',
            'Kusanagi',
            'Discípulos do Meste Kame'
        ];

        //nome dataDeNascimento cpf genero_id email password equipe faixa_id peso_id created_at  updated_at  

        $cont = 0;

        for ($i=0; $i < 50 ; $i++) {
                Atleta::create([
                'nome' => fake()->name(),
                'dataDeNascimento' => fake()->date('Y-m-d'),
                'cpf' => rand(00000000000, 99999999999),
                'genero_id' => rand(1, 2),
                'email' => fake()->unique()->safeEmail(),
                'password' => Hash::make(1234),
                'equipe' => $equipes[$cont],
                'faixa_id' => rand(1, 2),
                'peso_id' => rand(1, 2)
                // 'created_at' => now(),
                // 'updated_at' => now()                
            ]);
            $cont++;            
            //$cont = ($cont > 5) ? 0 : $i;
            if ($cont > 5) {
                $cont = 0;                 
             } 
        }
    }
}
