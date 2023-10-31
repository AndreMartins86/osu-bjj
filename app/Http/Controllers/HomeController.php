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


public function integra(Campeonato $campeonato, string $slug) : View
{
    return view('integra', compact('campeonato'));
}


public function buscar(Request $req) : View
{
    //dd($req);
    $titulo = $req->titulo;
    $tipo = $req->tipo;
    $cidade = $req->cidade;    
    $estado = $req->estado;

    if ($req->tipo == null) {
          $campeonatos = Campeonato::where('titulo', 'LIKE', '%'.$titulo.'%')
            ->where('cidade', 'LIKE', '%'.$cidade.'%')
            ->where('estado_id',$estado)
            ->paginate(8);
    } else {
        $campeonatos = Campeonato::where('titulo', 'LIKE', '%'.$titulo.'%')
            ->where('cidade', 'LIKE', '%'.$cidade.'%')
            ->where('estado_id',$estado)
            ->where('tipo_id',$tipo)
            ->paginate(8);        
    }  

    $tipos = DB::table('tipos')->get();
    $estados = DB::table('estados')->get();

    if ($campeonatos->total() == 0) {                

        $campeonatos = Campeonato::where('ativo','=','1')
        ->latest('dataCampeonato')
        ->paginate(8);

        session()->now('message', 'Nenhum torneio encontrado.');

        return view('torneios', compact('campeonatos', 'tipos', 'estados'));
    }

    return view('torneios', compact('campeonatos', 'tipos', 'estados'));
}

}
