<?php
require_once(dirname(__FILE__).'/../utils/init.php');

    if (isset($_POST['id']) && $_POST['id'] != "") {
        $id = $_POST["id"];
    }else{
        $id = Null;
    }
    if (isset($_POST['nom']) && $_POST['nom'] != "") {
        $nom = $_POST['nom'];
    }
    else {
        $nom = Null;
    }

    if (isset($_POST['prenom']) && $_POST['prenom'] != "") {
        $prenom = $_POST['prenom'];
    }
    else {
        $prenom = Null;
    }

    if (isset($_POST['email']) && $_POST['email'] != "") {
        $email = $_POST['email'];
    }
    else {
        $email = Null;
    }

    if (isset($_POST['mdp']) && $_POST['mdp'] != "") {
        $mdp = $_POST['mdp'];
        $mdp = password_hash($mdp, PASSWORD_DEFAULT);
    }
    else {
        $mdp = Null;
    }



    $bdd = new PDO('mysql:host=localhost; dbname=amiens_sc', 'admin' , 'Parker.2280700');


    try {
        $requete = $bdd->prepare("UPDATE user SET nom = :nom, prenom = :prenom, email = :email, mdp = :mdp WHERE id = :id;");
        $requete->bindValue(":id", $id, PDO::PARAM_INT);
        $requete->bindValue(":nom", $nom, PDO::PARAM_STR);
        $requete->bindValue(":prenom", $prenom, PDO::PARAM_STR);
        $requete->bindValue(":email", $email, PDO::PARAM_STR);
        $requete->bindValue(":mdp", $mdp, PDO::PARAM_STR);
        

        $requete->execute();
        $requete->closeCursor();
        header("Location: /../views/profil.php");
    }
    catch (Exception $e) {
        echo "Erreur : " . $requete->errorInfo()[2] . "<br>";
    }




// Appelle des fichiers pour créé la page 
include dirname(__FILE__)."/../views/templates/header.php";
include dirname(__FILE__)."/../views/modifUser.php";
include dirname(__FILE__)."/../views/templates/footer.php";
?>