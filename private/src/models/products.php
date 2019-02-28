<?php

/**
 * Recupération dynamique des produits
 *
 * @param [string] $type
 * @return [false|array]
 */
function getProducts($type) 
{
    global $db;

    // Récupération de la liste des produits de type "Pizza"
    $query = $db['main']->query( "SELECT t1.id, t1.name, t1.price, t3.name FROM products AS t1 INNER JOIN product_ingredients AS t2 ON t2.id_product = t1.id INNER JOIN ingredients AS t3 ON t3.id = t2.id_ingredient WHERE t1.type='".$type."' ORDER BY t1.name ASC, t3.name ASC" );
    return $query->fetchAll();
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