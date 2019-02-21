<?php
/**
 * Fichier de routage de l'application
 * 
 * RAPPEL du format d'une route dans le tableau $route
 *  - Le nom de la route
 *  - Le "path"
 *  - Le "controller", la focntion déclenché par la route
 *  - La|Les méthode(s)
 */

// Dans le cas ou la variable $routes n'est pas défini (dans le fichier routes.php)
// On initalise la variable $routes avec un tableau vide
if (!isset($routes)) {
    $routes = [];
}

// Récupération de l'uri courant
if (!empty($_SERVER['REQUEST_URI'])) 
{
    $uri = $_SERVER['REQUEST_URI'];
}


// Recherche de l'URI dans le tableau de routage
foreach ($routes as $route) 
{
    // le paramètre "path" doit correspondre à l'$uri
    if ($route[1] == $uri) 
    {
        echo "<h3>Dans la boucle</h3>";
        print_r($route[1]);
        echo "<br>";
    }
}
