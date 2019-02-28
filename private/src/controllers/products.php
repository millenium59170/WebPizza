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
    $products = getPizzas();

    // Intégration de la vue
    // include_once "../private/src/views/products/pizzas.php";
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
    // include_once "../private/src/views/products/salads.php";
    include_once "../private/src/views/products/read.php";
    
    // Intégration de la vue
    // include_once "../private/src/views/products/salads.php";
   
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
    // include_once "../private/src/views/products/desserts.php";
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
     // include_once "../private/src/views/products/drinks.php";
     include_once "../private/src/views/products/read.php";
    
  
}

/**
 * Menus
 */
function products_menus() 
{ 
    // Intégration du model
    include_once "../private/src/models/products.php";
    
    $pageTitle = "Menus";
    $products = getMenus();

    // Intégration de la vue
    // include_once "../private/src/views/products/menus.php";
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
    include_once "../private/src/views/products/crud/create.php";
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