<?php

/**
 * Ajout du message flash à la $_SESSION
 *
 * @param [string] $state success | danger
 * @param [string] $message
 */
function setFlashbag($state, $message) 
{
    $_SESSION['flashbag'] = [
        "state" => $state,
        "message" => $message
    ];
}

/**
 * @return [array] le message flash
 */
function getFlashbag() 
{
    // Si le message flash est définie
    if (isset($_SESSION['flashbag'])) 
    {
        // Définition d'une variable qui récupére le message
        $output = $_SESSION['flashbag'];

        // Destruction du message
        unset($_SESSION['flashbag']);

        // On retourne le message stocké dans la variable $output
        return $output;
    }
}

/**
 * @return boolean
 */
function hasFlashbag() 
{
    return isset($_SESSION['flashbag']);
}