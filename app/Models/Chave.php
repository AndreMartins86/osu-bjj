<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chave extends Model
{
    use HasFactory;

    protected $fillable = [
        'campeonato_id',
        'lutador_1',
        'lutador_2',
        'genero_id',
        'faixa_id',
        'peso_id'
    ];


    public function campeonatos(): BelongsTo
    {
        return $this->belongsTo(Campeonato::class);
    }
}
