<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Campeonato;
use App\Http\Requests\TorneioStoreRequest;
use App\Http\Requests\TorneioUpdateRequest;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Maatwebsite\Excel\Facades\Excel as Excel;
use App\Exports\UserExport;

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
         $campeonato->titulo = $request->titulo;
         $campeonato->dataCampeonato = $request->dataCampeonato;
         $campeonato->cidade = $request->cidade;
         $campeonato->estado_id = $request->estado_id;
         $campeonato->sobre = $request->sobre;
         $campeonato->local = $request->local;
         $campeonato->informacoes = $request->informacoes;
         $campeonato->entradaPublico = $request->entradaPublico;
         $campeonato->tipo_id = $request->tipo_id;

         $campeonato->fase_id = 1;
         $campeonato->ativo = 1;

         //dd($campeonato);

         $campeonato->save();
    
        return response()->json(['success'=>'Cadastrado']);
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
        $estados = DB::table('estados')->get();
        $tipos = DB::table('tipos')->get();

        $campeonato = $adm_torneio;        

        return view('painel.editarTorneio',compact('campeonato', 'estados', 'tipos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Campeonato $adm_torneio)
    {
       //$validado = $request->validated();

       //$adm_torneio->fill($validado);

        $folderPath = public_path('upload/');            

        $image_parts = explode(";base64,", $request->imagem);
        //$image_type_aux = explode("image/", $image_parts[0]);
        //$image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
 
        $imageName = uniqid() . '.png';
 
        $imageFullPath = $folderPath.$imageName;

        $imagemPath = 'upload/'.$imageName;
 
        file_put_contents($imageFullPath, $image_base64);
 
         //$campeonato =  new Campeonato;       

         $adm_torneio->imagem = $imagemPath;
         $adm_torneio->titulo = $request->titulo;
         $adm_torneio->dataCampeonato = $request->dataCampeonato;
         $adm_torneio->cidade = $request->cidade;
         $adm_torneio->estado_id = $request->estado_id;
         $adm_torneio->sobre = $request->sobre;
         $adm_torneio->local = $request->local;
         $adm_torneio->informacoes = $request->informacoes;
         $adm_torneio->entradaPublico = $request->entradaPublico;
         $adm_torneio->tipo_id = $request->tipo_id;

         $adm_torneio->fase_id = 1;
         $adm_torneio->ativo = 1;

         //dd($campeonato);

         //$campeonato->save();

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

        $adm_torneio->status = 0;

        $adm_torneio->update();

        session()->flash('msg', 'Campeonato Deletado.');

        return redirect()->route('adm_torneio.index');
    }

       public function gerarPDF()
    {
        $campeonatos = Campeonato::all();

        $pdf = PDF::loadView('painel.pdfTorneios', compact('campeonatos'));

        return $pdf->setPaper('a4')->stream('campeonatos.pdf');
    }

    public function gerarCSV()
    {
        return Excel::download(new UserExport(), 'usuarios-csv.csv');
    }

}