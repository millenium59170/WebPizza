<?php
/**
 * Fichier de config general de l'app
 * 
 * 1.def des constantes
 * 2.def des variable d'environnement d'execution
 * 3.
 */

 /**
  * 1 definition des constantes
  */
// Definir le chemin du répertoire "utils"
define('UTILS_PATH', "../private/app/utils/");
  //WEBSITE_TITLE : Definition du titre di site
  define('WEBSITE_TITLE', "WebPizza !");

/**
 * 2.def des variable d'environnement d'execution
 */

//environement de dev ou prod
//les valeur peuvent etre : prod ou dev
// par defaut on considere que l'app s'execute en environnement de PROD
$env = "prod";

//listes des domaines que lon consideres comme etant des environnement de developpement
$dev_domains = [
"127.0.0.1",
"localhost",
"webpizza.local"
];

//liste des configurations de connexions au base de donnéé par defaut
$db_config = [];

//liste des connexion aux base de donnéés
// Cette liste sera sera nourris par le fichier db_connect.php 
$db = [];


//inclusion 
require_once "database.php";

/**
 * 4. Definition des variables de routage
 */