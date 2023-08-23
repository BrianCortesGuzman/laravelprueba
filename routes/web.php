<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PokemonController;


Route::get('/', [PokemonController::class, 'index']);
Route::get('/pokemonlista', [PokemonController::class, 'pokemonlista'])->name('pokemonlista');
Route::post('/guardarpokemones', [PokemonController::class, 'guardarpokemones'])->name('guardarpokemones');
