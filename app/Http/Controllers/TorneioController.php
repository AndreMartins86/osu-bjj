<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Campeonato;
use App\Http\Requests\TorneioStoreRequest;
use App\Http\Requests\TorneioUpdateRequest;

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
        $estados = DB::table('estados')->get();

        return view('painel.cadastrarTorneio', compact('estados'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TorneioStoreRequest $request)
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

        return view('painel.editar',compact('campeonato'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TorneioUpdateRequest $request, Campeonato $adm_torneio)
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
        //$adm_torneio->delete();

        //mudar o status do campeonato

        session()->flash('msg', 'Campeonato Deletado.');

        return redirect()->route('adm_torneio.index');
    }
}
