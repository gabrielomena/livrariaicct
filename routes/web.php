<?php

use App\Http\Controllers\LivrosController;
use App\Http\Controllers\AutoresController;
use App\Http\Controllers\DashboardController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/','/dashboard');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->name('dashboard');


Route::group(['middleware'=>['auth:sanctum','verified']], function () {
    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/livros', LivrosController::class);
    Route::delete('/livros/deletar/{livros}',[LivrosController::class, 'destroy'])->name('deletar-livro');
    Route::post('/livros/atualizar/{livros}',[LivrosController::class, 'update'])->name('atualizar-livro');

    Route::resource('/autores', AutoresController::class);
    Route::post('/autores/atualizar/{autores}',[AutoresController::class, 'update'])->name('atualizar-autor');
    Route::delete('/autores/deletar/{autores}',[AutoresController::class, 'destroy'])->name('deletar-autor');

});

