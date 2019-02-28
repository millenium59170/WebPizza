<?php
/**
 * Fichier qui gère les requetes
 */

/**
 * Recupération dynamique des produits
 *
 * @param [string] $type
 * @return [false|array]
 */
function getProducts($type) 
{
    global $db;

    $sql = 
    "SELECT 
        t1.id AS productID, 
        t1.name AS productName, 
        t1.price AS productPrice, 
        t1.illustration AS productIllustration, 
        t3.name AS ingredientName
    FROM 
        products AS t1 
        INNER JOIN product_ingredients AS t2 ON t2.id_product = t1.id 
        INNER JOIN ingredients AS t3 ON t3.id = t2.id_ingredient 
    WHERE 
        t1.type='".$type."' 
    ORDER BY 
        t1.name ASC, 
        t3.name ASC
    ";

    // Récupération de la liste des produits de type "Pizza"
    $query = $db['main']->query($sql);
    return $query->fetchAll(PDO::FETCH_ASSOC);
}
/**
 * Recupération d'un produit
 *
 * @param [type] $id
 * @return void
 */
function getProduct($id)
{
    global $db;

    $sql = 
    "SELECT 
        id, name, price, illustration 
    FROM 
        products
    WHERE
        id=:id";

    $q = $db['main']->prepare($sql);
    $q->bindValue(':id', $id, PDO::PARAM_INT);
    $q->execute();

    return $q->fetch(PDO::FETCH_ASSOC);
}

/**
 * Liste des pizzas
 *
 * @return [false|array]
 */
function getPizzas() 
{
    return getProducts("pizza");
}

/**
 * Liste des salades
 * 
 *
 * @return [false|array]
 */
function getSalads() 
{
    return getProducts("salad");
}

/**
 * Liste des boissons
 *
 * @return [false|array]
 */
function getDrinks() 
{
    return getProducts("drink");
}

/**
 * Liste des menus
 *
 * @return [false|array]
 */
function getMenus() 
{
    return getProducts("menu");
}

/**
 * Liste des Desserts
 *
 * @return [false|array]
 */
function getDesserts() 
{
    return getProducts("dessert");
}