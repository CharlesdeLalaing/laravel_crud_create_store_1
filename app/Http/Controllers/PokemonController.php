<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function pokemon() {
        $pokemons = Pokemon::all();
        return view('pages.pokemonList', compact('pokemons'));
    }
    public function store(Request $request){
        $store = new Pokemon;
        $store->nom = $request->nom;
        $store->type = $request->type;
        $store->level = $request->level;
        $store->save();

        return redirect('/pokemon');
    }
}
