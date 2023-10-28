<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // Campeonatos:
    // • Código (obrigatório)
    // • Título do Campeonato (obrigatório)
    // • Imagem: (obrigatório)
    // • Cidade + Estado (select) (obrigatório)
    // • Data de Realização (obrigatório)
    // • Sobre o evento (Ckeditor) (obrigatório)
    // • Ginásio (Ckeditor)  (obrigatório)
    // • Informações Gerais (Ckeditor) (obrigatório)
    // • Entrada ao Público (Ckeditor) (preenchimento opcional)
    // • Tipo: (Select: “Kimono” ou “No-Gi) / (obrigatório)
    // • Fase (select: 3 opções mencionadas anteriormente) (obrigatório)
    // • Status: Ativo/Inativo (obrigatório)
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('campeonatos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('imagem');
            $table->string('cidade');
            $table->foreignId('estado_id')->constrained();
            $table->date('dataCampeonato');
            $table->text('sobre');
            $table->string('local');
            $table->text('informacoes');
            $table->text('entradaPublico')->nullable();
            $table->foreignId('genero_id')->constrained();
            $table->foreignId('tipo_id')->constrained();
            $table->foreignId('fase_id')->constrained();
            $table->boolean('ativo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campeonatos');
    }
};
