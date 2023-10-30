<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Campeonato;

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
        return view('torneios');
    }
}
