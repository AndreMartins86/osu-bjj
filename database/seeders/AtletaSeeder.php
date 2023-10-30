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
        $generoF = 1;
        $generoM = 2;

        for ($i=0; $i < 20 ; $i++) {
            ////////////////////////////////////////////////////////////////
            /////Atletas femininas
            ////////////////////////////////////////////////////////////
                Atleta::create([
                'nome' => fake()->name(),
                'dataDeNascimento' => fake()->dateTimeBetween('-50 years', '-8 years'),
                'cpf' => rand(00000000000, 99999999999),
                'genero_id' => $generoF,
                'email' => fake()->unique()->safeEmail(),
                'password' => Hash::make(1234),
                'equipe' => $equipes[$cont],
                'faixa_id' => 1,
                'peso_id' => 1
            ]);
           
             //////////////////////////////////////////////////////////////////

              Atleta::create([
                'nome' => fake()->name(),
                'dataDeNascimento' => fake()->dateTimeBetween('-50 years', '-8 years'),
                'cpf' => rand(00000000000, 99999999999),
                'genero_id' => $generoF,
                'email' => fake()->unique()->safeEmail(),
                'password' => Hash::make(1234),
                'equipe' => $equipes[$cont],
                'faixa_id' => 1,
                'peso_id' => 2
            ]);
        
             ///////////////////////////////////////////////////////////////
             Atleta::create([
                'nome' => fake()->name(),
                'dataDeNascimento' => fake()->dateTimeBetween('-50 years', '-8 years'),
                'cpf' => rand(00000000000, 99999999999),
                'genero_id' => $generoF,
                'email' => fake()->unique()->safeEmail(),
                'password' => Hash::make(1234),
                'equipe' => $equipes[$cont],
                'faixa_id' => 2,
                'peso_id' => 2
            ]);

             /////////////////////////////////////////////////////////////
             Atleta::create([
                'nome' => fake()->name(),
                'dataDeNascimento' => fake()->dateTimeBetween('-50 years', '-8 years'),
                'cpf' => rand(00000000000, 99999999999),
                'genero_id' => $generoF,
                'email' => fake()->unique()->safeEmail(),
                'password' => Hash::make(1234),
                'equipe' => $equipes[$cont],
                'faixa_id' => 2,
                'peso_id' => 1
            ]);
           
             //////////////////////////////////////////////////////////
             // Atletas Masculinos
             ///////////////////////////////////////////////////////////       

             Atleta::create([
                'nome' => fake()->name(),
                'dataDeNascimento' => fake()->dateTimeBetween('-50 years', '-8 years'),
                'cpf' => rand(00000000000, 99999999999),
                'genero_id' => $generoM,
                'email' => fake()->unique()->safeEmail(),
                'password' => Hash::make(1234),
                'equipe' => $equipes[$cont],
                'faixa_id' => 1,
                'peso_id' => 1
            ]);

             ///////////////////////////////////////////////////////////
             Atleta::create([
                'nome' => fake()->name(),
                'dataDeNascimento' => fake()->dateTimeBetween('-50 years', '-8 years'),
                'cpf' => rand(00000000000, 99999999999),
                'genero_id' => $generoM,
                'email' => fake()->unique()->safeEmail(),
                'password' => Hash::make(1234),
                'equipe' => $equipes[$cont],
                'faixa_id' => 1,
                'peso_id' => 2
            ]);
           
             ////////////////////////////////////////////////////////////
             Atleta::create([
                'nome' => fake()->name(),
                'dataDeNascimento' => fake()->dateTimeBetween('-50 years', '-8 years'),
                'cpf' => rand(00000000000, 99999999999),
                'genero_id' => $generoM,
                'email' => fake()->unique()->safeEmail(),
                'password' => Hash::make(1234),
                'equipe' => $equipes[$cont],
                'faixa_id' => 2,
                'peso_id' => 2
            ]);
       
             Atleta::create([
                'nome' => fake()->name(),
                'dataDeNascimento' => fake()->dateTimeBetween('-50 years', '-8 years'),
                'cpf' => rand(00000000000, 99999999999),
                'genero_id' => $generoM,
                'email' => fake()->unique()->safeEmail(),
                'password' => Hash::make(1234),
                'equipe' => $equipes[$cont],
                'faixa_id' => 2,
                'peso_id' => 1
            ]);

            $cont++;            
            //$cont = ($cont > 5) ? 0 : $i;
            if ($cont > 5) {
                $cont = 0;                 
             }

        }
    }
}
