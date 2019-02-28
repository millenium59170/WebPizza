<?php
/**
 * Fichier d'exécution de l'application
 */

/**
 * 1. Démarrage de la session
 * --
 * La session va permettre de suivre le visiteur pendant la durée de sa navigation
 */
session_start();

/**
 * 2. Intégration de la configuration
 */
require_once "../private/app/config/config.php";

/**
 * 3. Définition de l'environnement
 */
require_once "../private/app/src/environnement.php";

/**
 * 4. Comportement des erreurs
 */
require_once "../private/app/src/err_reporting.php";

/**
 * 5. Connections aux base de données
 */
require_once "../private/app/src/db_connect.php";

/**
 * 6. Routage de l'application
 */
require_once "../private/app/src/routing.php";

/**
 * 7. Inclusion des fonctions "Utils"
 */
require_once "../private/app/src/load_utils.php";

/**
 * 8. Compilation de la page
 */
require_once "../private/app/src/compile.php";