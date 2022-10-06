<?php

namespace App\Http\Controllers;

use App\Models\Autores;
use App\Services\Livro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;

class AutoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autores = Livro::getAutores();
        return Inertia::render('Autores/Index', ['autores' => $autores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $autor = Autores::create($request->all());
        Livro::storeAutor($autor);
        return redirect()->route('dashboard.index')->with('success', "Autor cadastrado com sucesso");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Autores  $autores
     * @return \Illuminate\Http\Response
     */
    public function show(Autores $autores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Autores  $autores
     * @return \Illuminate\Http\Response
     */
    public function edit(Autores $autores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Autores  $autores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Autores $autores)
    {
        $autores->update([
            'primeiro_nome' => $request->primeiro_nome,
            'ultimo_nome' => $request->ultimo_nome
        ]);
        Livro::editAutor($request);

        return redirect()->route('dashboard.index')->with('success', "Autor atualizado com sucesso");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Autores  $autores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Autores $autores)
    {
       Livro::deleteAutor($autores);
       $autores->delete();
       return redirect()->route('dashboard.index')->with('success', "Autor deletado com sucesso");
    }
}
