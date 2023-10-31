<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Campeonato;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home() : View
    {
        $campeonatos = Campeonato::where('ativo','=','1')
        ->latest('dataCampeonato')
        ->take(4)
        ->get();    

        return view('index', compact('campeonatos'));
    }


    public function torneios() : View
    {
     $campeonatos = Campeonato::where('ativo','=','1')
     ->latest('dataCampeonato')
     ->paginate(8);

     $estados = DB::table('estados')->get();
     $tipos = DB::table('tipos')->get();

     return view('torneios', compact('campeonatos', 'estados', 'tipos'));
 }


 public function atleta() : View
 {
    return view('area_atleta.area_restrita');
}


public function integra(Campeonato $campeonato) : View
{
    return view('integra', compact('campeonato'));
}


public function buscar(Request $req) : View
{        
    $titulo = $req->titulo;
    $cidade = $req->cidade;
    $tipo = $req->tipo;
    $estado = $req->estado;


    $campeonatos = Campeonato::where('titulo', 'LIKE', '%'.$titulo.'%')
    ->where('cidade', 'LIKE', '%'.$cidade.'%')    
    ->paginate(8);

        //dd($campeonatos->total());

    if ($campeonatos->total() == 0) {                

        $campeonatos = Campeonato::where('ativo','=','1')
        ->latest('dataCampeonato')
        ->paginate(8);

        session()->flash('message', 'Nenhum torneio encontrado');

        return view('torneios', compact('campeonatos'));
    }

    return view('torneios', compact('campeonatos'));
}

}
