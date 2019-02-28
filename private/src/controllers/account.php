<?php
/**
 * Fichier qui gère la page du profil client
 */

/**
 * index
 */
function account_index() 
{
    // Verifie si l'utilisateur n'est pas identifié
    if (!isset($_SESSION['user']) || empty($_SESSION['user'])) 
    {
        redirect("/connexion");
    }
    
    // Intégration de la vue
    include_once "../private/src/views/account/index.php";
}