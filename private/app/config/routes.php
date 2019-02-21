<?php
/**
 * Fichier de définition des routes de l'applications
 * 
 * - Chaque ligne du tableau $routes défini une route
 * - Chaque route est défini par
 *      - Le nom de la route
 *      - Le "path"
 *      - Le "controller", la focntion déclenché par la route
 *      - La|Les méthode(s)
 */

$routes = [

    // Route Index (page d'accueil du site)
    ["homepage", "/", "homepage:index", ["HEAD","GET"]],

    // Page de contact
    ["contact", "/contact", "contact:index", ["HEAD","GET"]]
    
];