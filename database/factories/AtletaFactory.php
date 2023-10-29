<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Atleta>
 */
class AtletaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => fake()->name(),
            'dataDeNascimento' => fake()->date(),
            'cpf' => rand(00000000000, 99999999999),
            'genero_id' => rand(1, 2),
            'email' => fake()->unique()->safeEmail(),            
            'password' => Hash::make(1234),
            //'equipe' => fake()->name(),
            'faixa_id' => rand(1, 2),
            'peso_id' => rand(1, 2)            
        ];
    }
}
