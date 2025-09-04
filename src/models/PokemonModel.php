<?php

class PokemonModel
{
    /**
     * Récupère tous les Pokémons
     * @return array tableau contenant tous les Pokémons
     */
    public function getAll(): array
    {
        // on va chercher le fichier json.
        $jsonFile = file_get_contents(__DIR__ . '/../data/pokemons.json');
        // on crée un tableau associatif à l'aide de json_decode()
        $allPokemons = json_decode($jsonFile, true);
        // on retourne tous les Pokemons
        return $allPokemons;
    }

    /**
     * Récupère un Pokémon par son ID
     *
     * @param int $id l'ID du Pokémon à récupérer
     * @return array|null le Pokémon correspondant à l'ID, ou null s'il n'existe pas
     */
    public function getById(int $id): ?array
    {
        // on définit une variable à null
        $result = null;
        // on va chercher le fichier json.
        $jsonFile = file_get_contents(__DIR__ . '/../data/pokemons.json');
        // on crée un tableau associatif à l'aide de json_decode()
        $allPokemons = json_decode($jsonFile, true);
        // nous allons parcourir le tableau à l'aide d'un foreach, et nous allons return le pokemon correspondant à l'id
        foreach ($allPokemons as $pokemon) {
            if ($pokemon['id'] == $id) {
                $result = $pokemon;
                break;
            }
        }
        return $result;
    }

    public function getAllType()
    {
        // on va chercher le fichier json.
        $jsonFile = file_get_contents(__DIR__ . '/../data/pokemons.json');
        // on crée un tableau associatif à l'aide de json_decode()
        $allPokemons = json_decode($jsonFile, true);

        $arrayType = [];

        foreach ($allPokemons as $pokemon) {
            foreach ($pokemon['type'] as $type) {
                if (!in_array($type, $arrayType, 1)) {
                    $arrayType[] = $type;
                }
            }
        }

        return $arrayType;
    }
}
