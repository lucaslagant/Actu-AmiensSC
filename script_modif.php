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
        if (isset($_POST['mdpb']) && $_POST['mdpb'] != "") {
            $mdp1 = $_POST['mdpb'];
        }
        else {
            $mdp1 = Null;
        }
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

    function complex_password($mdp){
        $rgx = "/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/";
        
        if(preg_match($rgx, $mdp)){
            return true;
        }
        else{
            return false;
        }
    }

    function verif_email($email){
        $rgx = "/^[a-z0-9.-]+@[a-z0-9.-]{2,}.[a-z]{2,4}$/";

        if(preg_match($rgx, $email)){
            return true;
        }
        else{
            return false;
        }
    }

    $vmdp = complex_password($mdp1);

    $vlogin = verif_email($email);

    if(!($vmdp && $vlogin)){
        header("Location: form_modif_user.php");
        exit;
    }

    if($mdp1 = $mdp2){
        $mdp = $mdp1;
    }
    elseif(password_verify($mdp1, $mdp2)){
        $mdp = $mdp1;
    }
    else{
        header("Location: form_modif_user.php");
        exit;
    }

    $hmdp = password_hash($mdp, PASSWORD_DEFAULT);

    require "db.php"; 
    $db = connexionBase();


    try {
        $requete = $db->prepare("UPDATE user SET nom = :nom, prenom = :prenom, email = :email, mdp = :mdp");
        $requete->bindValue(":nom", $nom, PDO::PARAM_INT);
        $requete->bindValue(":prenom", $prenom, PDO::PARAM_STR);
        $requete->bindValue(":email", $email, PDO::PARAM_STR);
        $requete->bindValue(":mdp", $hmdp, PDO::PARAM_STR);
        

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