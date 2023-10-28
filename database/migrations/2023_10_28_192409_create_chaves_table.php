<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // • Código do Campeonato
    // • Faixa
    // • Peso
    // • Atletas
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('chaves', function (Blueprint $table) {
            $table->foreignId('campeonato_id')->constrained();
            $table->foreignId('genero_id')->constrained();
            $table->foreignId('faixa_id')->constrained();
            $table->foreignId('peso_id')->constrained();
            $table->foreignId('atleta_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chaves');
    }
};
