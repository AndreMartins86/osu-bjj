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
    public function store(Request $request)
    {        

        $folderPath = public_path('upload/');            

        $image_parts = explode(";base64,", $request->imagem);
        //$image_type_aux = explode("image/", $image_parts[0]);
        //$image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);


 
        $imageName = uniqid() . '.png';
 
        $imageFullPath = $folderPath.$imageName;

        $imagemPath = 'upload/'.$imageName;
 
        file_put_contents($imageFullPath, $image_base64);
 
         $campeonato =  new Campeonato;
         $campeonato->imagem = $imagemPath;
         $campeonato->titulo = 'teste';
         $campeonato->dataCampeonato = '2022-03-03';
         $campeonato->cidade = 'teste';
         $campeonato->estado_id = 25;
         $campeonato->sobre = 'teste';
         $campeonato->local = 'teste';
         $campeonato->informacoes = 'teste';
         $campeonato->entradaPublico = 'teste';
         $campeonato->tipo_id = 1;
         $campeonato->fase_id = 1;
         $campeonato->ativo = 1;

         //dd($campeonato);

         $campeonato->save();
    
        return response()->json(['success'=>'Crop Image Uploaded Successfully']);
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
