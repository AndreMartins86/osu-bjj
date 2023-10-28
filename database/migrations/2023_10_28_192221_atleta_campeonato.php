<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('atleta_campeonato', function (Blueprint $table){
            $table->id();
            $table->foreignId('atleta_id')->constrained();
            $table->foreignId('campeonato_id')->constrained();
            $table->date('dataDaInscricao');
            
        });
    }   

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};