<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampeonatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Pessoa::factory(100)->create();
        $titulos = [
            'Campeonato Regional Santista 2023',
            'Torneio Estadual Infantil 2024',
            'Jiu-Jitsu Masters 2023',
            'Liga Jiu-Jitsu de Pindamonhangaba'
            'Torneio de Jiu-Jitsu Praia Grande 2023',
            'Torneio Federação Paulista de Jiu-Jitsu 2023',            
            'MMA Masters 2023',
            'Rio vs São Paulo MMA III',
            'Death Cage 2023',
            'Mortal Kombat II',
            'Maia Championship Nacional 2023'
        ];

        $j = count($titulos);
        $cidade = '';
        $tipo = '';

            // titulo  imagem  cidade  estado_id   dataCampeonato  sobre   local   informacoes entradaPublico  genero_id   tipo_id fase_id ativo   created_at  updated_at

        for ($i=0; $i < $j ; $i++) { 
             Campeonato::create([
                'titulo' => $titulos[$i],
                'imagem' => 'img/torneio-card.jpg',
                'cidade' => $cidade,
                'estado_id' => '25',
                'dataCampeonato' => fake()->date(),
                'sobre' => fake()->text(),
                'local' => 'Ginásio Municipal',
                'informacoes' => fake()->text(),
                'entradaPublico' => fake()->text(),                
                'tipo_id' => $tipo,
                'fase_id' => rand (1, 3),
                'ativo' => '1',
        ]);

             $tipo = ($i < 5) ? 'Kimono' : 'No-Gi';
             $cidade = ($i < 5) ? 'Praia Grande' : 'Santos';
            
        }       
    }
}
