<?php

class HomeController {
    public function index(){
        // nous allons chercher le modèle permettant d'obtenir les datas
        require_once __DIR__ . '/../models/PokemonModel.php';

        // on recupère tous les pokemons à l'aide de la méthode getAll() et on stock les données dans la variable $tousLesPokemons
        $objet = new PokemonModel();
        $tousLesPokemons = $objet->getAll();

        // on appelle la vue home
        require_once __DIR__ . '/../views/home.php';
    }
}