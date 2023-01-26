<?php
// Appelle de la BDD 
$bdd = new PDO('mysql:host=localhost; dbname=amiens_sc', 'admin' , 'Parker.2280700');
// Appelle d'un fichier init qui contient juste un session_start 
require_once(dirname(__FILE__).'/../utils/init.php');
// Appelle d'un fichier contenant toute les regex 
require_once(dirname(__FILE__). '/../utils/regex.php');

    if (!empty($_POST)) {
        if (isset($_POST["nom"], $_POST["prenom"], $_POST["email"], $_POST["mdp"]) && !empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["email"]) &&  !empty($_POST["mdp"]) ) {
            // Le form est complet 
            // On protege les donnes
            $nom = strip_tags($_POST["nom"]);
            $prenom = strip_tags($_POST["prenom"]);
            $email = trim(filter_input(INPUT_POST , 'email', FILTER_SANITIZE_EMAIL));
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

            // Insert les info saisie dans le form en bdd 
            $requete = $bdd->prepare('INSERT INTO user(nom, prenom, email, mdp) VALUES (?, ?, ?, ?);');
            $requete->execute(array($nom, $prenom, $email, $mdp));

            // On recupere l'id du nouvel utilisateur
            $id = $bdd->lastInsertId();

            // On connectera l'utilisateur
            $_SESSION["user"] = [
                "id" => $id,
                "nom" => $nom,
                "prenom" => $prenom,
                "email" => $email
            ];

            header("Location: /../index.php");

        }else {
            die("Le formulaire incomplet !");
        }
    }

// Appelle des fichiers pour créé la page 
include dirname(__FILE__)."/../views/templates/header.php";
include dirname(__FILE__)."/../views/inscription.php";
include dirname(__FILE__)."/../views/templates/footer.php";
?>