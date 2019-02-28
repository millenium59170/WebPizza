<?php
/**
 * Fichier qui gère les pages de securité
 */

/**
 * login
 */
function security_login() 
{
    global $db;

    // Verifie si l'utilisateur est deja identifié
    if (isset($_SESSION['user']['id']) && !empty($_SESSION['user']['id'])) 
    {
        redirect("/mon-compte");
    }

    // On test la méthode
    if ($_SERVER['REQUEST_METHOD'] === "POST")
    {
        $isValid = true;
    
        // Récup des données
        $email          = isset($_POST['email']) ? trim($_POST['email']) : null;
        $password_text  = isset($_POST['password']) ? $_POST['password'] : null;
    
        // Est ce que un utilisateur correspond à l'adresse $email
        $q = $db['main']->prepare("SELECT id, fullname, email, password FROM users WHERE email=:email");
        $q->bindValue(':email', $email, PDO::PARAM_STR);
        $q->execute();
    
        $r = $q->fetchAll(PDO::FETCH_ASSOC);
    
    
        // Si $r est un tableau vide, => L'UTILISATEUR N'EST PAS ENREGISTRE DANS LA BDD
        if (empty($r)) {
            $isValid = false;
        }
    
        // Si l'utilisateur a ete trouvé dans la BDD
        // On compare le mot de passe saisi et celui de la BDD
        if ($isValid) 
        {
            if (password_verify( $password_text, $r[0]['password'] )) 
            {
                // Suppression du MDP du resultat de la requete
                unset($r[0]['password']);
    
                // Ajouter les informations utilisateur dans la $_SESSION
                $_SESSION['user'] = $r[0];
    
                // Redirige l'utilisateur
                redirect();
            }
            else {
                $isValid = false;
            }
        }
    
        if (!$isValid) {
            setFlashbag("danger", "oops, mauvais identifiants....");
        }
    }
    
    // Intégration de la vue
    include_once "../private/src/views/security/login.php";
}

/**
 * register
 */
function security_register() 
{
    global $db;

    // Verifie si l'utilisateur est deja identifié
    if (isset($_SESSION['user']['id']) && !empty($_SESSION['user']['id'])) 
    {
        redirect("/mon-compte");
    }

    $firstname = null;
    $lastname = null;
    $email = null;

    // On test la méthode
    if ($_SERVER['REQUEST_METHOD'] === "POST") {

        $isValid = true;

        // Récupération des données 
        $firstname      = isset($_POST['firstname']) ? trim($_POST['firstname']) : null;
        $lastname       = isset($_POST['lastname']) ? trim($_POST['lastname']) : null;
        $email          = isset($_POST['email']) ? trim($_POST['email']) : null;
        $password_text  = isset($_POST['password']) ? $_POST['password'] : null;
        $password_hash  = password_hash($password_text, PASSWORD_DEFAULT);        

        // Controle du formulaire
        // if (xxxx) {
        //     $isValid = false;
        // }

        // Verification de l'unicité de l'utilisateur
        $q = $db['main']->prepare("SELECT id FROM users WHERE email=:email");
        $q->bindValue(':email', $email, PDO::PARAM_STR);
        $q->execute();
        $r = $q->fetchAll();

        // Si $r contient au moins un résultat, on stop le processus d'inscription
        if (!empty($r)) {
            $isValid = false;
        }

        // Enregistrement des données dans la BDD
        if ($isValid) {
            // Préparation de la requete
            $q = $db['main']->prepare("INSERT INTO users (`firstname`, `lastname`, `email`, `password`) 
                                    VALUES (:firstname , :lastname , :email , :password)");
            $q->bindValue(':firstname', $firstname, PDO::PARAM_STR);
            $q->bindValue(':lastname', $lastname, PDO::PARAM_STR);
            $q->bindValue(':email', $email, PDO::PARAM_STR);
            $q->bindValue(':password', $password_hash, PDO::PARAM_STR);

            // Execution de la requete
            $r = $q->execute();

            // Si la requete est un succès
            if ($r) { // $r === true
                redirect("/connexion");
            }
            else {
                setFlashbag("danger", "les données n'ont pas été enregistrées dans la BDD !");
            }
        }
        else {
            setFlashbag("warning", "oops, erreur sur le form !");
        }


    }
    
    // Intégration de la vue
    include_once "../private/src/views/security/register.php";
}

/**
 * forgotten_password
 */
function security_forgotten_password() 
{
    // Code 
    // ...
    
    // Intégration de la vue
    include_once "../private/src/views/security/forgotten_password.php";
}

/**
 * Deconnexion utilisateur
 */
function security_logout()
{
    session_destroy();
    redirect();
}