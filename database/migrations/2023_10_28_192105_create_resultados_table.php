<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // • Código do Campeonato
    // • Faixa
    // • Peso
    // • 1º Colocado
    // • 2º Colocado
    // • 3º Colocado
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('resultados', function (Blueprint $table) {
            $table->foreignId('campeonato_id')->constrained();
            $table->foreignId('faixa_id')->constrained();
            $table->foreignId('peso_id')->constrained();
            $table->string('primeiroColocado');
            $table->string('segundoColocado');
            $table->string('terceiroColocado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resultados');
    }
};
