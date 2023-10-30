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
        'equipe'
    ];
  
    protected $hidden = [
        'password',        
    ];

    

    public function campeonatos(): BelongsToMany
    {
        return $this->belongsToMany(Campeonato::class);
    }
}
