<?php

// on définit une variable $url qui va récupérer la valeur de l'index 'url' dans le tableau $_GET, ou 'home' si cette index n'existe pas
$url = $_GET['url'] ?? 'home';

// on utilise un switch pour gérer les différentes routes
switch($url) {
    case 'home':
        // exemple pour afficher home
        // on inclut le controller respectif : HomeController
        require_once __DIR__ . '/controllers/HomeController.php';
        // je créé un objet controller qui a comme classe HomeController
        $controller = new HomeController();
        // j'utilise la méthode index() pour afficher le contenu
        $controller->index();
        break;
}

