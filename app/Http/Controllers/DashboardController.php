<?php

namespace App\Http\Controllers;

use App\Services\Livro;
use Inertia\Inertia;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = auth()->user();
        $autores = Livro::getAutores();
        $livros = Livro::getLivros();
        return Inertia::render('Dashboard', ['usuario' => $usuario,'autores' => $autores, 'livros' => $livros]);
    }

}
