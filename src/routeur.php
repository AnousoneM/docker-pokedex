<?php

// exemple pour afficher home
// on inclut le controller respectif : HomeController
require_once __DIR__ . '/controllers/HomeController.php';
// je créé un objet controller qui a comme classe HomeController
$controller = new HomeController();
// j'utilise la méthode index() pour afficher le contenu
$controller->index();
