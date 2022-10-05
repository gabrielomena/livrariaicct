<?php

namespace App\Services;

use App\Models\Autores;
use App\Models\Livros;
use Illuminate\Support\Facades\Http;

use function PHPSTORM_META\map;

class ApiServices
{
    public static function getLivros()
    {
        $api_livros = Http::accept('application/json')->get("https://bibliapp.herokuapp.com/api/books?access_token=livraria_icct")->json();
        foreach ($api_livros as $livro) {
            $livros = Livros::firstOrCreate([
                'titulo' => $livro['title'],
                'isbn' => $livro['isbn'] ?? '',
                'autor_id' => $livro['authorId']
            ]);
        }
        return $livros;
    }

    public static function getAutores()
    {
        $api_autores = Http::accept('application/json')->get("https://bibliapp.herokuapp.com/api/authors?access_token=livraria_icct")->json();
        foreach ($api_autores as $autor) {
            $autores = Autores::firstOrCreate([
                'primeiro_nome' => $autor['firstName'],
                'ultimo_nome' => $autor['lastName']
            ]);
        }
        return $autores;
    }
}
