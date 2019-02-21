<?php
/**
 * Fichier de connexions aux base de sonnées
 * - http://php.net/manual/fr/class.pdo.php
 * 
 * 
 * Instance PDO - Exemple 1
 * Passage de paramètres au constructeur :
 * ---
 * $pdo = new PDO('mysql:host=localhost;dbname=DBNAME', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));
 * 
 * 
 * Instance PDO - Exemple 2
 * construction de objet, puis passage de paramètres à PDO::setAttribute() :
 * ---
 * $pdo = new PDO('mysql:host=localhost;dbname=DBNAME', 'root', '');
 * $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
 */

// Dans le cas ou la variable $db_config n'est pas défini (dans le fichier config.php)
// On initalise la variable $db_config avec un tableau vide
if (!isset($db_config)) {
    $db_config = [];
}

// On boucle sur la liste de config des connexions aux bases de données
foreach ($db_config as $name => $params) 
{
    // Génère la chaine DSN (Domain Source Name) PDO (ex: 'mysql:host=localhost;dbname=DBNAME')
    $db_dsn = $params['type'].":";
    $db_dsn.= "host=". $params['host'].";";
    $db_dsn.= "port=". $params['port'].";";
    $db_dsn.= "dbname=". $params['schema'].";";
    $db_dsn.= "charset=". $params['charset'].";";
    
    // Nom de l'utilisateur de la base de données
    $db_user = $params['user']; 

    // Mot de passe de l'utilisateur de la base de données
    $db_pass = $params['pass']; 

    // Instance de connection
    // Création de $db['main']
    $db[$name] = new PDO($db_dsn, $db_user, $db_pass);

    // Comportement des erreurs PDO
    if ($env == "dev") {
        $db[$name]->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    }
}