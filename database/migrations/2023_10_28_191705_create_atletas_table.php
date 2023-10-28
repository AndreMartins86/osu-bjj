<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    // • Código (obrigatório)
    // • Nome (obrigatório)
    // • Data de Nascimento (obrigatório)
    // • CPF: (obrigatório)
    // • Sexo: Masculino ou Feminino (obrigatório)
    // • E-mail: (obrigatório)
    // • Senha: (obrigatório)
    // • Equipe: (obrigatório)
    // • Faixa: (Select: Marrom / Preta) (obrigatório) - reduziremos apenas para essas 2 faixas para simplicar o sistema
    // • Peso: (Select: Leve / Pesado) (obrigatório) – reduziremos apenas para essas 2 opções para simplificar o sistema
    // • Data da Inscrição
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('atletas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->date('dataDeNascimento');
            $table->string('cpf');
            $table->foreignId('genero_id')->constrained();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('equipe');
            $table->foreignId('faixa_id')->constrained();
            $table->foreignId('peso_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atletas');
    }
};
