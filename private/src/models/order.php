<?php

/**
 * Récupère une commande en fonction de l'id utilisateur ou la session PHP
 *
 * @param [type] $user
 * @return void
 */
function getOrderByUser($user) 
{
    global $db;

    $sql = 
    "SELECT
        id, amount
    FROM 
        orders
    WHERE
        id_user=:user || sess_user=:user
    ";

    $q = $db['main']->prepare($sql);
    $q->bindValue(':user', $user);
    $q->execute();

    return $q->fetch(PDO::FETCH_ASSOC);
}

/**
 * Creation d'une commande
 *
 * @param [type] $user
 * @return void
 */
function createOrder($user)
{
    global $db;

    $sql = "INSERT INTO `orders` (`sess_user`, `id_user`, `order_date`) 
                          VALUES (:sess_user , :id_user , :order_date)";
    
    $query = $db['main']->prepare($sql);
    $query->bindValue(':sess_user', $user['session'], PDO::PARAM_STR);
    $query->bindValue(':id_user', $user['id']);
    $query->bindValue(':order_date', date('Y-m-d H:i:s'));
    $query->execute();

    return $db['main']->lastInsertId();
}


/**
 * MAJ du montant d'une commande
 */
function updateOrderAmount($order, $amount)
{
    global $db;

    $sql = 
    "UPDATE `orders`
    SET
        `amount`=:amount
    WHERE
        `id`=:id
    ";

    $query = $db['main']->prepare($sql);
    $query->bindValue(':amount', $amount);
    $query->bindValue(':id', $order, PDO::PARAM_INT);
    return $query->execute();
}

function updateOrderUser($order, $user)
{
    global $db;

    $sql = 
    "UPDATE `orders`
    SET
        `id_user`=:id_user
    WHERE
        `id`=:id
    ";

    $query = $db['main']->prepare($sql);
    $query->bindValue(':id_user', $user, PDO::PARAM_INT);
    $query->bindValue(':id', $order, PDO::PARAM_INT);
    return $query->execute();
}

/**
 * Recupère la liste des produits d'une commande
 *
 * @param [type] $order_id
 * @return void
 */
function getOrderProducts($order_id)
{
    global $db;

    $sql = 
    "SELECT
        `id`, `id_product`, `qty`, `price`
    FROM
        `order_products`
    WHERE
        `id_order`=:id_order
    ";

    $query = $db['main']->prepare($sql);
    $query->bindValue(':id_order', $order_id, PDO::PARAM_INT);
    $query->execute();

    return $query->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * Ajoute un produit à une commande
 * 
 * @param array $product Infos du produit a ajouter à la commande
 * @param int $order ID de la commande
 */
function addProductToOrder($product, $order)
{
    global $db;

    $sql = 
    "INSERT INTO `order_products` (`id_order`, `id_product`, `qty`, `price`, `amount`)
                           VALUES (:id_order , :id_product , :qty , :price , :amount)";

    $query = $db['main']->prepare($sql);
    $query->bindValue(':id_order', $order, PDO::PARAM_INT);
    $query->bindValue(':id_product', $product['id'], PDO::PARAM_INT);
    $query->bindValue(':qty', 1, PDO::PARAM_INT);
    $query->bindValue(':price', $product['price']);
    $query->bindValue(':amount', $product['price']);
    $query->execute();

    return $db['main']->lastInsertId();
}

/**
 * Modifie la quantité d'un produit dans une commande
 */
function updateProductInOrder($product, $order_product_id)
{
    global $db;

    $sql = 
    "UPDATE 
        `order_products`
    SET
        `qty`=qty+1,
        `amount`=amount+".$product['price']."
    WHERE
        `id`=:id
    ";

    $query = $db['main']->prepare($sql);
    $query->bindValue(':id', $order_product_id, PDO::PARAM_INT);
    
    return $query->execute();
}