<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campeonato extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'imagem',
        'cidade',
        'estado_id',
        'dataCampeonato',
        'sobre',
        'local',
        'informacoes',
        'entradaPublico',
        'genero_id',
        'tipo_id',
        'fase_id',
        'ativo'       
    ];

    // titulo  imagem  cidade  estado_id   dataCampeonato  sobre   local   informacoes entradaPublico  genero_id   tipo_id fase_id ativo   created_at  updated_at
}
