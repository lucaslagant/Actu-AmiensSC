<?php
// Appelle de la BDD 
$bdd = new PDO('mysql:host=localhost; dbname=amiens_sc', 'admin' , 'Parker.2280700');
// Appelle d'un fichier init qui contient juste un session_start 
require_once(dirname(__FILE__).'/../utils/init.php');

if (!empty($_POST)) {
    if (isset($_POST["email"], $_POST["mdp"]) && !empty($_POST["email"] && !empty($_POST["mdp"]))) {
    //    On vérifie que l'email en est un 
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            die("Ce n'est pas un email");
        }

        $sql = $bdd->prepare("SELECT * FROM user WHERE email = :email");
        $sql->bindValue(":email", $_POST["email"], PDO::PARAM_STR);
        $sql->execute();
        $user = $sql->fetch();

        if (!$user) {
            die("L'utilisateur et/ou le mot passe est incorrect");
        }

        // Ici on a un user, on peut vérifie le mdp
        if (!password_verify($_POST["mdp"], $user["mdp"])) {
            die("L'utilisateur et/ou le mot passe est incorrect");
        }

        // Ici l'utilisateur et le mot de passe sont corrects
        // On va pourvoir ouvrir la session
        // On stocke dans $_SESSION les info de l'user 
        $_SESSION["user"] = [
            "id" => $user["id"],
            "nom" => $user["nom"],
            "prenom" => $user["prenom"],
            "email" => $user["email"]
        ];
        // On redirige vers la page de index
        header("Location: /../index");

       
    }
}


// Appelle des fichiers pour créé la page 
include dirname(__FILE__)."/../views/templates/header.php";
include dirname(__FILE__)."/../views/connexion.php";
include dirname(__FILE__)."/../views/templates/footer.php";
?>