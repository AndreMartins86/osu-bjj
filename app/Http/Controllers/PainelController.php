<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\PainelStoreRequest;
use App\Http\Requests\PainelUpdateRequest;

class PainelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View   
    {
        $usuarios = User::paginate(10);

        return view('painel.paineladm', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('painel.cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PainelStoreRequest $request) : RedirectResponse
    {
        //dd($request);   
        User::create($request->validated());

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
    public function edit(User $adm_painel) : View
    {
        $user = $adm_painel;
        //dd($user);

        return view('painel.editar',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PainelUpdateRequest $request, User $adm_painel) : RedirectResponse
    {

        //auth()->user()->update($request->validated());

       $validado = $request->validated();

       $adm_painel->fill($validado);

       $adm_painel->update();

       return redirect()->route('adm_painel.index');
   }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $adm_painel) : RedirectResponse
    {
        $adm_painel->delete();

        return redirect()->route('adm_painel.index');
    }
}
