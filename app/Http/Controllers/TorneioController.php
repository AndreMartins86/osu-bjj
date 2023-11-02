<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campeonato;

class TorneioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $campeonatos = Campeonato::orderBy('dataCampeonato', 'desc')->paginate(10);


        return view('painel.torneioadm', compact('campeonatos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('painel.cadastrarTorneio');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Campeonato::create($request->validated());

        session()->flash('msg', 'Campeonato Cadastrado.');

        return redirect()->route('adm_painel.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Campeonato $adm_torneio)
    {
        $campeonato = $adm_torneio;        

        return view('painel.editar',compact('torneio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)/////>>>>ARRUMAR PARAMETROS!!!!!!//////
    {
       $validado = $request->validated();

       $adm_torneio->fill($validado);

       $adm_torneio->update();

       session()->flash('msg', 'Campeonato Atualizado.');

       return redirect()->route('adm_painel.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Campeonato $adm_torneio)
    {
        $adm_torneio->delete();

        session()->flash('msg', 'Campeonato Deletado.');

        return redirect()->route('adm_torneio.index');
    }
}
