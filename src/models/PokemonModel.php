<?php

class PokemonModel
{
    public function getAll(): array
    {
        // on va chercher le fichier json.
        $jsonFile = file_get_contents(__DIR__ . '/../data/pokemons.json');
        // on crée un tableau associatif à l'aide de json_decode()
        $allPokemons = json_decode($jsonFile, true);
        // on retourne tous les Pokemons
        return $allPokemons;
    }

    public function getById($id) {}
}
