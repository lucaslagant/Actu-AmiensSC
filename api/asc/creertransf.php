<?php
// Headers requis
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// On vérifie la méthode
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // On inclut les fichiers de configuration et d'accès aux données
    include_once '../config/Database.php';
    include_once '../models/Transferts.php';

    // On instancie la base de données
    $database = new Database();
    $db = $database->getConnection();

    // On instancie les produits
    $transfert = new Transferts($db);

    // On récupère les informations envoyées
    $donnees = json_decode(file_get_contents("php://input"));
    
    if(!empty($donnees->id) && !empty($donnees->valeur_joueur) && !empty($donnees->club_depart) && !empty($donnees->club_arrivee) && !empty($donnees->montant) && !empty($donnees->date) ){
        // Ici on a reçu les données
        // On hydrate notre objet
        $transfert->id = $donnees->id;
        $transfert->valeur_joueur = $donnees->valeur_joueur;
        $transfert->club_depart = $donnees->club_depart;
        $transfert->club_arrivee = $donnees->club_arrivee;
        $transfert->montant = $donnees->montant;
        $transfert->date = $donnees->date;

        if($user->creer()){
            // Ici la création a fonctionné
            // On envoie un code 201
            http_response_code(201);
            echo json_encode(["message" => "L'ajout a été effectué"]);
        }else{
            // Ici la création n'a pas fonctionné
            // On envoie un code 503
            http_response_code(503);
            echo json_encode(["message" => "L'ajout n'a pas été effectué"]);         
        }
    }
}else{
    // On gère l'erreur
    http_response_code(405);
    echo json_encode(["message" => "La méthode n'est pas autorisée"]);
}