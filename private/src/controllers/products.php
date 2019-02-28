<?php
/**
 * Fichier qui gère la page d'accueil
 */

/**
 * Pizzas
 */
function products_pizzas() 
{
    // Intégration du model
    include_once "../private/src/models/products.php";
    
    $pageTitle = "Nos Pizzas";

    $products = [];
    $productsModel = getPizzas();

    // Re-construction de la liste des produite
    foreach ($productsModel as $product) 
    {
        if (!isset($products[ $product['productID'] ])) 
        {
            $products[ $product['productID'] ] = [];
        }
        
        $products[ $product['productID'] ]['id'] = $product['productID'];
        $products[ $product['productID'] ]['name'] = $product['productName'];
        $products[ $product['productID'] ]['price'] = $product['productPrice'];
        $products[ $product['productID'] ]['illustration'] = $product['productIllustration'];

        if (!isset($products[ $product['productID'] ]['ingredients'])) {
            $products[ $product['productID'] ]['ingredients'] = [];
        }

        array_push($products[ $product['productID'] ]['ingredients'], $product['ingredientName']);
    }

    // Intégration de la vue
    include_once "../private/src/views/products/read.php";
}

/**
 * Salads
 */
function products_salads() 
{
    // Intégration du model
    include_once "../private/src/models/products.php";
    
    $pageTitle = "Nos Salades";
    $products = getSalads();

    // Intégration de la vue
    include_once "../private/src/views/products/read.php";
}

/**
 * Desserts
 */
function products_desserts() 
{
    // Intégration du model
    include_once "../private/src/models/products.php";
    
    $pageTitle = "Nos Desserts";
    $products = getDesserts();

    // Intégration de la vue
    include_once "../private/src/views/products/read.php";
}

/**
 * Drinks
 */
function products_drinks() 
{
    // Intégration du model
    include_once "../private/src/models/products.php";
    
    $pageTitle = "Nos Boissons";
    $products = getDrinks();

    // Intégration de la vue
    include_once "../private/src/views/products/read.php";
}

/**
 * Menus
 */
function products_menus() 
{
    // Intégration du model
    include_once "../private/src/models/products.php";
    
    $pageTitle = "Nos Menus";
    $products = getMenus();

    // Intégration de la vue
    include_once "../private/src/views/products/read.php";
}


// PRODUCTS CRUD

/**
 * Création d'un produit
 */
function products_create() 
{
    global $db;

    // Données du fomulaire par défaut
    $name = null;
    $description = null;
    $illustration = null;
    $price = null;

    // Traitement du formulaire
    if ($_SERVER['REQUEST_METHOD'] === 'POST') 
    {
        $isValid = true;

        // Recup des données du formulaire
        $name           = isset($_POST['name']) ? trim($_POST['name']) : null;
        $description    = isset($_POST['description']) ? trim($_POST['description']) : null;
        $illustration   = isset($_POST['illustration']) ? trim($_POST['illustration']) : null;
        $price          = isset($_POST['price']) ? trim($_POST['price']) : null;

        // Controle du form



        // print_r( $_POST );
    }

    // Affichage du Formulaire
    include_once "../private/src/views/products/create.php";
}

/**
 * MAJ d'un produit
 */
function products_update() 
{
    echo "MAJ #".$_GET['id'];
}

/**
 * Suppression d'un produit
 */
function products_delete() 
{
    // 
}