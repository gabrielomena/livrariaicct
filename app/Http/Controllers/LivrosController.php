<?php

namespace App\Http\Controllers;

use App\Models\Livros;
use App\Services\Livro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;

class LivrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //
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
        $livro = Livros::create($request->all());
        Livro::storeLivro($livro);
        return redirect()->route('dashboard.index')->with('success', "Livro cadastrado com sucesso");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Livros  $livros
     * @return \Illuminate\Http\Response
     */
    public function show(Livros $livros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Livros  $livros
     * @return \Illuminate\Http\Response
     */
    public function edit(Livros $livros)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Livros  $livros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Livros $livros)
    {
        $livros->update([
            'titulo' => $request->titulo,
            'isbn' => $request->isbn,
            'autor_id' => $request->autor_id
        ]);
        Livro::editLivro($request);

        return redirect()->route('dashboard.index')->with('success', "Autor atualizado com sucesso");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Livros  $livros
     * @return \Illuminate\Http\Response
     */
    public function destroy(Livros $livros)
    {
        Livro::deleteLivro($livros);
        $livros->delete();
       return redirect()->route('dashboard.index')->with('success', "Livro deletado com sucesso");
    }
}
