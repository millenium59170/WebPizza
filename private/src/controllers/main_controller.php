<?php
/**
 * Fichier du controleur commun à toutes les pages
 */

function getCartSummary() 
{
    include_once "../private/src/models/order.php";

    // -- Récupération des données du client
    $user_sess_id = session_id();
    $user_id = isset($_SESSION['user']['id']) ? $_SESSION['user']['id'] : null;


    // -- Récupération de la commande client
    if ($user_id != null) {
        $order = getOrderByUser($user_id);
    } else {
        $order = getOrderByUser($user_sess_id);
    }

    if ($order) {
        return "(".$order['amount']." &euro;)";
    }
}