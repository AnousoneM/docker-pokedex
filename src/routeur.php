<?php

// on définit une variable $url qui va récupérer la valeur de 'url' dans le tableau $_GET, ou 'home' si n'existe pas 'url'
$url = $_GET['url'] ?? 'home';

// je transforme $url en un tableau à l'aide de explode()
$arrayUrl = explode('/', $url);

// je récupère la page demandée index 0
$page = $arrayUrl[0];

// je récupère l'id demandée index 1, si il n'est pas présent je donne la valeur à l'$id à null
$id = $arrayUrl[1] ?? null;

// on utilise un switch pour gérer les différentes routes
switch ($page) {

    case 'home':
        // on inclut le controller respectif : HomeController
        require_once __DIR__ . '/controllers/HomeController.php';
        // je créé un objet controller qui a comme classe HomeController
        $objController = new HomeController();
        // j'utilise la méthode index() pour afficher le contenu
        $objController->index();
        break;
        
    case 'details':
        // on inclut le controller respectif : DetailsController
        require_once __DIR__ . '/controllers/DetailsController.php';
        // je créé un objet controller qui a comme classe DetailsController
        $objController = new DetailsController();
        // j'utilise la méthode show() pour afficher le contenu
        $objController->show($id);
        break;

    default:
        // page 404
        require_once __DIR__ . '/views/page404.php';
        break;
}
