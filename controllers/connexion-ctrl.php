<?php
// Appelle de la BDD 
$bdd = new PDO('mysql:host=localhost; dbname=amiens_sc', 'admin' , 'Parker.2280700');
// Appelle d'un fichier init qui contient juste un session_start 
require_once(dirname(__FILE__).'/../utils/init.php');

// $errorsArray = [];

// if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST)) {
//     $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
//     $isOk = filter_var($email, FILTER_SANITIZE_EMAIL);

//     // FILTER_SANITIZE_EMAIL supprime tout les caractéres interdit dans l'email

//     if (!empty($email)) {
//         if (!$isOk) {
//             $errorsArray['email_error'] = 'Le mail n\est pas valide';
//         }
//     }else {
//         $errorsArray['email_error'] = 'Le champ est obligatoire';
//     }
//     $mdp = $_POST['mdp'];
//     // sha1() fait matcher le cryptage saisie avec celui de la bdd
//     if (empty($errorsArray)) {
//         $recupUser = $bdd->prepare('SELECT * FROM user WHERE email = ?');
//         $recupUser->execute(array($email));
//         // Si déja un user qui existe
//         // On vérifie le mot de passe 
//         var_dump(password_verify($mdp));die;
        
        
//         if ($recupUser-> rowCount() > 0) {
//             $_SESSION['email'] = $email;
//             $_SESSION['mdp'] = $mdp;
//             $_SESSION['id'] = $recupUser->fetch()['id'];
//             header('Location: index.php');
//         }else {
//             echo "Erreur !!!";
//         }
//     }
 
// }
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
        var_dump($_SESSION);

       
    }
}


// Appelle des fichiers pour créé la page 
include dirname(__FILE__)."/../views/templates/header.php";
include dirname(__FILE__)."/../views/connexion.php";
include dirname(__FILE__)."/../views/templates/footer.php";
?>