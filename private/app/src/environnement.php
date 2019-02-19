<?php
/**
 * fichier de definition de l'environnement d'execution de l'app
 */

 //dans le cas ou la variable $dev_domains n'est pas defini (dans le fichier config.php)
 //on initialise la variable $dev_domains avec un tableau vide 

 if (!isset($dev_domains)) {
     $dev_domains = [];
 }


 

 echo "--------<br>";
 echo "valeur de \$env = ".$env;
