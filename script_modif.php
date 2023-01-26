<?php
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

    if (isset($_POST['mdp1']) && $_POST['mdp1'] != "") {
        $mdp1 = $_POST['mdp1'];
    }
    else {
        $mdp1 = Null;
    }

    if (isset($_POST['mdp2']) && $_POST['mdp2'] != "") {
        $mdp2 = $_POST['mdp2'];
    }
    else {
        if (isset($_POST['mdpb']) && $_POST['mdpb'] != "") {
            $mdp2 = $_POST['mdpb'];
        }
        else {
            $mdp2 = Null;
        }
    }


    if ($nom == Null || $prenom == Null || $email == null || $mdp1 == null || $mdp2 == null) {
        header("Location: form_modif_user.php");
        exit;
    }

    require "db.php"; 
    $db = connexionBase();


    try {
        $requete = $db->prepare("UPDATE user SET nom = :nom, prenom = :prenom, email = :email, mdp = :mdp");
        $requete->bindValue(":nom", $nom, PDO::PARAM_INT);
        $requete->bindValue(":prenom", $prenom, PDO::PARAM_STR);
        $requete->bindValue(":email", $email, PDO::PARAM_STR);
        $requete->bindValue(":mdp", $mdp1, PDO::PARAM_STR);
        

        $requete->execute();
        $requete->closeCursor();
    }

    catch (Exception $e) {
        echo "Erreur : " . $requete->errorInfo()[2] . "<br>";
        die("Fin du script (script_modif.php)");
    }

    header("Location: profil.php");
    exit;
?>