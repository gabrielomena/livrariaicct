<?php

namespace App\Http\Controllers;

use App\Models\Livros;
use App\Services\ApiServices;
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
        $autores = ApiServices::getAutores();
        $livros = ApiServices::getLivros();

        return Inertia::render('Livros/Index', ['livros' => $livros]);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Livros  $livros
     * @return \Illuminate\Http\Response
     */
    public function destroy(Livros $livros)
    {
        //
    }
}
