<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modelopokemon;

class PokemonController extends Controller
{
    public function index()
    {
        
        $content = view('Complementos/Header')
                    .view('pokemon/pokemon')
                    .view('Complementos/Footer');
                    return $content;
    }

    public function pokemonlista()
    {
        $pokemones = modelopokemon::all();
        $content = view('Complementos/Header')
                    .view('pokemon/pokemonlista',['pokemones' => $pokemones])
                    .view('Complementos/Footer');
                    return $content;
    }

    public function guardarpokemones(Request $request){
        $nombre = $request->input('nombre');
        $idpokemon = $request->input('idpokemon');
        $experiencia = $request->input('experiencia');
        $hp = $request->input('hp');
        $attack = $request->input('attack');
        $defense = $request->input('defense'); 
        $specialattack = $request->input('special-attack'); 
        $specialdefense = $request->input('special-defense'); 
        $speed = $request->input('speed');   
        $imga=$request->input('img'); 
        modelopokemon::create(
            [
                'IDpokemon'=>$idpokemon,
                'pok_nombre'=>$nombre,
                'pok_experiencia'=>$experiencia,
                'pok_hp'=>$hp,
                'pok_ataque'=>$attack,
                'pok_defensa'=>$defense,
                'pok_Sp_a'=>$specialattack,
                'pok_sp_d'=>$specialdefense,
                'pok_Speed'=>$speed,
                'img'=>$imga
            ]
            );
            return redirect()->back()->with('success', 'Datos guardados');

    }

}
