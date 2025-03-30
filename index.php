<?php

$router = [
    'geieg' => 'back/formulariController.php',
    'geieg/home' => 'back/homeController.php',
    'geieg/compartir' => 'back/compartirController.php',
    'admin' => 'back/confirmacioController.php',
    'usuaris' => 'back/usuaris.php',
    'premis' => 'back/premis.php',
    'compartir' => 'back/compartir.php'
];

$url = isset($_GET['url']) ? trim($_GET['url'], '/') : '';

if (array_key_exists($url, $router)) {
    require $router[$url];
} else {
    echo "Página no encontrada";
}
