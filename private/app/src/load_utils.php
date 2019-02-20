<?php
/**
 * Fichier de chargement automatique des script du répertoire /private/app/utils
 */

// Test si la constante UTILS_PATH n'est pas définie.
if (!defined('UTILS_PATH')) {
    define('UTILS_PATH', null);
}

if (UTILS_PATH != null) 
{
    // Scanner le répertoir UTILS_PATH
    $utils_scan = scandir(UTILS_PATH);
    
    // Une boucle sur la liste des entrées $utils_scan
    foreach( $utils_scan as $key => $value) 
    {
        // Filtre les fichiers se terminant par ".php"
        if (preg_match("/\.php$/", $value)) 
        {
            // On inclus uniquement les fichiers ".php"
            include_once UTILS_PATH.$value;
        }
    }
}