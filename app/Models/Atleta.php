<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Atleta extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'password',
        'dataDeNascimento',
        'cpf',
        'equipe',
        'genero_id',
        'peso_id',
        'faixa_id'        
    ];
  
    protected $hidden = [
        'password',        
    ];



    public function campeonatos(): BelongsToMany
    {
        return $this->belongsToMany(Campeonato::class);
    }
}
