<?php
/**
 * Fichier qui gère la page de contact
 */

/**
 * index
 */
function contact_index() 
{
    global $re, $db;

    if ($_SERVER['REQUEST_METHOD'] === "POST")
    {
        $send = true;

        // Récupération des données
        $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : null;
        $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : null;
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $message = isset($_POST['message']) ? $_POST['message'] : null;
    
        // -- Contrôle des champs

        // Contrôle du champ Prénom
        if (!preg_match($re['firstname'], $firstname)) {
            $send = false;
            echo "Erreur du champ Firstname";
        }
        
        // Contrôle du champ nom
        if (!preg_match($re['lastname'], $lastname)) {
            $send = false;
            echo "Erreur du champ Lastname";
        }
        
        // Contrôle du champ email
        if (!preg_match($re['email'], $email)) {
            $send = false;
            echo "Erreur du champ Email";
        }

        // Contrôle du champ message
        if (strlen($message) < 10) {
            $send = false;
            echo "Erreur du champ message";
        }

        if ($send) {
            // Enregistrement du message dans la BDD avec PDO

            $query = $db['main']->prepare("INSERT INTO messages (`firstname`, `lastname`, `email`, `message`, `sending_timestamp`) 
                                                         VALUES (:firstname , :lastname , :email , :message, :sendingTimestamp )");

            $query->bindValue(':firstname', $firstname, PDO::PARAM_STR);
            $query->bindValue(':lastname', $lastname, PDO::PARAM_STR);
            $query->bindValue(':email', $email, PDO::PARAM_STR);
            $query->bindValue(':message', $message, PDO::PARAM_STR);
            $query->bindValue(':sendingTimestamp', time(), PDO::PARAM_INT);

            $results = $query->execute();

            // TODO: Définition d'un message de "callback / flashbag" (success ou error)
            if ($results) {
                setFlashbag("success", "Merci $firstname, Votre message à était envoyé.");
            }
            else {
                setFlashbag("danger", "Votre message n'à pas était envoyé.");
            }

            // Redirection de l'utilisateur vers la page précedente 
            header("location: ".$_SERVER['HTTP_REFERER']);

        }
        // else {
            // TODO: Définition d'un message de "callback" (error)
            // TODO: Redirection de l'utilisateur vers la page précedente 
        //     echo "Erreur sur le form";
        // }

    }

    else {
        // TODO: Suppression du else + redirection de l'utilisateur
        // TODO: Définition d'un message de "callback" (error)
        // TODO: Redirection de l'utilisateur vers la page précedente 
        echo "Le formulaire ne peut être traité qu'avec la méthode POST";
    }

}