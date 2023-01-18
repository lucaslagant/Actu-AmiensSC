<?php
// Appelle de notre class User 
require_once(dirname(__FILE__).'/../models/User.php');
// Appelle de la BDD 
require_once(dirname(__FILE__).'/../config/Database.php');
// Appelle d'un fichier init qui contient juste un session_start 
require_once(dirname(__FILE__).'/../utils/init.php');
// Appelle de la class Mail
require_once(dirname(__FILE__).'/../class/Mail.php');
// Appelle d'un fichier contenant toute les regex 
require_once(dirname(__FILE__). '/../utils/regex.php');

    // Création d'un tableau d'erreur
    $errors = [];

    // vérification du form

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST))
    {
        // Vérification et sécurité trim = supprime les caractères et espace en début et fin de chaine, filter_input = recup une variable externe et filtre 
        $nom = trim(filter_input(INPUT_POST , 'nom'));
        if ($nom) {
            // Gestion des erreurs
            if (!preg_match(REGEX_NO_NUMBER , $nom)) {
                $errors['nom'] = 'Format du nom invalide';
            }
            // /!\ Ne pas oublier de rajouter un pattern  avec la regex dans la views pour une double vérification 
        }

        $prenom = trim(filter_input(INPUT_POST , 'prenom'));
        if ($prenom) {
            if (!preg_match(REGEX_NO_NUMBER , $prenom)) {
                $errors['prenom'] = 'Format du prénom invalide';
            }
        }
        $email = trim(filter_input(INPUT_POST , 'email'));
        if ($email) {
            if (!preg_match(REGEX_NO_NUMBER , $email)) {
                $errors['email'] = 'Format de l\'adresse mail invalide';
            }
        }
        $mdp = $_POST['mdp'];
        $confirmMdp = $_POST['confirmMdp'];
        if ($mdp == $confirmMdp) {
            $mdp  = password_hash($mdp, PASSWORD_DEFAULT);
        }else {
            $errors['mdp'] = 'Les mots de passe ne correspondent pas';
        }
        // Si il n'y pas d'erreur 
        if (empty($error)) {
            $pdo = Database::getConnection();
            $user = new User($nom , $prenom , $email, $mdp);
            $response = $user->creer();
            $id = $pdo->lastInsertId();

            if ($response === true) {
                
                $to = $mail;
                $from = SENDER_EMAIL;
                $sujet = 'Validation de votre inscription';
                $fromNom = FROM_NAME;
                $toNom = $nom;

                $link = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].''
            }
        
        }
        

        


       
    }





?>