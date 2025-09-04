<?php

class DetailsController
{
    /**
     * Affiche les détails d'un pokemon
     * @param int $id
     * @return void
     */
    public function show(int $id): void
    {
        // nous allons chercher le modèle permettant d'obtenir les datas
        require_once __DIR__ . '/../models/PokemonModel.php';

        // on recupère le pokemon à l'aide de la méthode getById() et on stock les données dans la variable $unPokemon
        $objPokemons = new PokemonModel();
        $pokemon = $objPokemons->getById($id);

        // on appelle la vue details
        require_once __DIR__ . '/../views/details.php';
    }
}
