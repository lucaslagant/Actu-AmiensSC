<?php
// Appelle de la BDD 
$bdd = new PDO('mysql:host=localhost; dbname=amiens_sc', 'admin' , 'Parker.2280700');
// Appelle d'un fichier init qui contient juste un session_start 
require_once(dirname(__FILE__).'/../utils/init.php');
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
        // Si le tableau d'erreur est vide 
        if (empty($error)) {
            // Insert les info saisie dans le form en bdd 
            $requete = $bdd->prepare('INSERT INTO user(nom, prenom, email, mdp) VALUES (?, ?, ?, ?);');
            $requete->execute(array($nom, $prenom, $email, $mdp));

            // recuperation de l'utilisateur en bdd 
            $recupUser = $bdd->prepare('SELECT * FROM user WHERE nom = ? AND prenom = ? AND mdp = ?;');
            $recupUser->execute(array($nom,$prenom,$mdp));
            // Si un user existe déjà 
            if ($recupUser->rowCount() > 0) {
                $_SESSION['nom'] = $nom;
                $_SESSION['prenom'] = $prenom;
                $_SESSION['id'] = $recupUser->fetch()['id'];
            }
            echo "BIENVENUE " .$_SESSION['prenom'];

        }

       
    }
include dirname(__FILE__)."/../views/templates/header.php";
include dirname(__FILE__)."/../views/inscription.php";
include dirname(__FILE__)."/../views/templates/footer.php";
?>