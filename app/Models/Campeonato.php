<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;

class Campeonato extends Model
{
    use HasFactory;

    protected $guarded = [];

   public function atletas(): BelongsToMany
    {
        return $this->belongsToMany(Atleta::class);
    }

    public function chaves(): HasMany
    {
        return $this->hasMany(Chave::class);
    }


    public function getFase(){

        $fases = DB::table('fases')->get();
        //dd($fases);

        if ($this->fase_id == 1) {
            return $fases[0]->fase;
        }

         if ($this->fase_id == 2) {
            return $fases[1]->fase;
        }

         if ($this->fase_id == 3) {
            return $fases[2]->fase;
        }        
    }

    public function getTipo(){

        $tipos = DB::table('tipos')->get();
        //dd($fases);

        if ($this->tipo_id == 1) {
            return $tipos[0]->tipo;
        }

         if ($this->tipo_id == 2) {
            return $tipos[1]->tipo;
        }          
    }

    public function getEstadoSigla(){
        
        $estados = DB::table('estados')->get();

    switch ($this->estado_id) {
        case 25:
          return $estados[24]->sigla;
          break;
        case 1:
          return $estados[0]->sigla;
          break;
        case 2:
          return $estados[1]->sigla;
          break;
       case 3:
          return $estados[2]->sigla;
          break;
       case 4:
          return $estados[3]->sigla;
          break;
       case 5:
          return $estados[4]->sigla;
          break;
       case 6:
          return $estados[5]->sigla;
          break;
       case 7:
          return $estados[6]->sigla;
          break;
       case 8:
          return $estados[7]->sigla;
          break;
       case 9:
          return $estados[8]->sigla;
          break;
       case 10:
          return $estados[9]->sigla;
          break;
       case 11:
          return $estados[10]->sigla;
          break;
       case 12:
          return $estados[11]->sigla;
          break;
       case 13:
          return $estados[12]->sigla;
          break;
       case 14:
          return $estados[13]->sigla;
          break;
       case 15:
          return $estados[14]->sigla;
          break;
       case 16:
          return $estados[15]->sigla;
          break;
       case 17:
          return $estados[16]->sigla;
          break;
       case 18:
          return $estados[17]->sigla;
          break;
       case 19:
          return $estados[18]->sigla;
          break;
       case 20:
          return $estados[19]->sigla;
          break;
       case 21:
          return $estados[20]->sigla;
          break;
       case 22:
          return $estados[21]->sigla;
          break;
       case 23:
          return $estados[22]->sigla;
          break;
       case 24:
          return $estados[23]->sigla;
          break;          
       case 26:
          return $estados[25]->sigla;
          break;
       default:
          return '##';
      }
    }
}
