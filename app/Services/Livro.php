<?php

namespace App\Services;

use App\Models\Autores;
use App\Models\Livros;
use Illuminate\Support\Facades\Http;


class Livro
{
    public static function getLivros()
    {
        $api_livros = Http::accept('application/json')->get("https://bibliapp.herokuapp.com/api/books?access_token=livraria_icct")->json();
        foreach ($api_livros as $livro) {
            if(isset($livro['authorId'])){
                $autor = Autores::find($livro['authorId']);
            }
            Livros::firstOrCreate([
                'titulo' => $livro['title'],
                'isbn' => $livro['isbn'] ?? null,
                'autor_id' => $autor->id ?? null
            ]);
        }
        return Livros::with('autor')->get();
    }
    public static function storeLivro($livro)
    {
        $data = [
            'title' => $livro->titulo,
            'isbn' => $livro->isbn,
            'authorId' => $livro->autor_id
        ];
        Http::withBody(json_encode($data), 'application/json')->withOptions(['verify' => false])->post('https://bibliapp.herokuapp.com/api/books?access_token=livraria_icct');
    }

    public static function deleteLivro($livro)
    {
        Http::accept('application/json')->delete("https://bibliapp.herokuapp.com/api/books/$livro->id?access_token=livraria_icct");
        return true;
    }
    public static function editLivro($livro)
    {
        $data = [
            'title' => $livro->titulo,
            'isbn' => $livro->isbn,
            'authorId' => $livro->autor_id
        ];
        Http::withBody(json_encode($data), 'application/json')->withOptions(['verify' => false])->put("https://bibliapp.herokuapp.com/api/books/$livro->id?access_token=livraria_icct");
    }

    public static function getAutores()
    {
        $api_autores = Http::accept('application/json')->get("https://bibliapp.herokuapp.com/api/authors?access_token=livraria_icct")->json();
        foreach ($api_autores as $autor) {
             Autores::firstOrCreate([
                'primeiro_nome' => $autor['firstName'],
                'ultimo_nome' => $autor['lastName']
            ]);
        }
        return Autores::all();
    }
    public static function storeAutor($autor)
    {
        $data = [
            'firstName' => $autor->primeiro_nome,
            'lastName' => $autor->ultimo_nome
        ];
        Http::withBody(json_encode($data), 'application/json')->withOptions(['verify' => false])->post("https://bibliapp.herokuapp.com/api/authors?access_token=livraria_icct");
    }
    public static function editAutor($autor)
    {
        $data = [
            'firstName' => $autor->primeiro_nome,
            'lastName' => $autor->ultimo_nome
        ];
        Http::withBody(json_encode($data), 'application/json')->withOptions(['verify' => false])->put("https://bibliapp.herokuapp.com/api/authors/$autor->id?access_token=livraria_icct");
    }
    public static function deleteAutor($autor)
    {
        Http::accept('application/json')->delete("https://bibliapp.herokuapp.com/api/authors/$autor->id?access_token=livraria_icct");
        return true;
    }
}
