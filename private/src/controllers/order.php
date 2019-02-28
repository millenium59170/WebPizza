<?php
/**
 * Fichier qui gère la page du panier client
 */

/**
 * index
 */
function order_index() 
{
    // Code 
    // ...
    
    // Intégration de la vue
    include_once "../private/src/views/order/index.php";
}

function order_add() 
{
    include_once "../private/src/models/products.php";
    include_once "../private/src/models/order.php";

    $isOrderOK = false;
    $isOrderProductOK = false;

    // -- Récupération des données du produit

    // Recup du paramètre ID
    $productID = isset($_GET['id']) ? trim($_GET['id']) : null;

    if (empty($productID)) 
    {
        setFlashbag("warning", "Le produit ne peux pas être ajouté au panier");
        redirect();
    }

    $product = getProduct($productID);


    // -- Récupération des données du client
    $user_sess_id = session_id();
    $user_id = isset($_SESSION['user']['id']) ? $_SESSION['user']['id'] : null;


    // -- Récupération de la commande client
    if ($user_id != null) {
        $order = getOrderByUser($user_id);
    } else {
        $order = getOrderByUser($user_sess_id);
    }
    

    // -- Création de la commande (si non existante)
    if (!$order) {
        $order = createOrder([
            "session" => $user_sess_id,
            "id" => $user_id
        ]);
    } else {
        $order = $order['id'];
    }


    // -- Récupération des produits dans la commandes
    $order_products = getOrderProducts($order);

    // Si la requete retourne FALSE
    if (!$order_products) {
        // On surcharge $order_products avec un tableau vide
        $order_products = [];
    }

    // On déclare la variable $add avec la valeur TRUE, qui va nous permettre de 
    // savoir si on ajoute le produit dans la BDD ou non
    $add = true;

    // On boucle sur la liste des produits de la commande
    // On ne rentre pas dans la boucle SI $order_products est un tableau vide
    foreach ($order_products as $order_product ) 
    {
        // Si le produit est deja dans la commande
        if ($order_product['id_product'] == $product['id']) {
            // Incrémentation de la quantité
            $isOrderProductOK = updateProductInOrder($product, $order_product['id']);

            // Et on passe la valeur de $add à FALSE, ce qui evitera au script 
            // d'ajouter une nouvelle ligne dans la BDD
            $add = false;
        } 
    }

    // Ajout du produit dans la BDD si $add est TRUE
    if ($add) {
        $isOrderProductOK = addProductToOrder($product, $order);
    }


    // -- MAJ de la commande
    $order_products = getOrderProducts($order);

    $amount = 0;

    foreach ($order_products as $order_product) 
    {
        $qty = $order_product['qty'];
        $price = $order_product['price'];

        $amount+= ($qty * $price);
    }

    $isOrderOK = updateOrderAmount($order, $amount);


    // -- Message de callback
    if ($isOrderOK && $isOrderProductOK) {
        setFlashbag("success", "Le produit a été ajouter au panier.");
    } 
    else if ($isOrderOK || $isOrderProductOK) {
        setFlashbag("warning", "Une erreur s'est produite lors de l'ajout du produit au panier");
    } 
    else {
        setFlashbag("danger", "Impossible d'ajouter le produit au panier");
    }

    // -- Redirection de l'utilisateur
    redirect($_SERVER['HTTP_REFERER']);
}