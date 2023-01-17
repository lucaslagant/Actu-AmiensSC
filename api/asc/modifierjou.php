<?php
// Headers requis
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: PUT");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// On vérifie la méthode
if($_SERVER['REQUEST_METHOD'] == 'PUT'){
    // On inclut les fichiers de configuration et d'accès aux données
    include_once '../config/Database.php';
    include_once '../models/Joueur.php';

    // On instancie la base de données
    $database = new Database();
    $db = $database->getConnection();

    // On instancie les produits
    $joueur = new Joueur($db);

    // On récupère les informations envoyées
    $donnees = json_decode(file_get_contents("php://input"));
    
    if(!empty($donnees->matchs_joues) && !empty($donnees->temps_de_jeu) && !empty($donnees->cartons_jaunes) && !empty($donnees->cartons_rouges) && !empty($donnees->buts_marques) && !empty($donnees->passes_decisives)){
        // Ici on a reçu les données
        // On hydrate notre objet
        $joueur->matchs_joues = $donnees->matchs_joues;
        $joueur->temps_de_jeu = $donnees->temps_de_jeu;
        $joueur->cartons_jaunes = $donnees->cartons_jaunes;
        $joueur->cartons_rouges = $donnees->cartons_rouges;
        $joueur->buts_marques = $donnees->buts_marques;
        $joueur->passes_decisives = $donnees->passes_decisives;

        if($joueur->modifier()){
            // Ici la modification a fonctionné
            // On envoie un code 200
            http_response_code(200);
            echo json_encode(["message" => "La modification a été effectuée"]);
        }else{
            // Ici la modification n'a pas fonctionné
            // On envoie un code 503
            http_response_code(503);
            echo json_encode(["message" => "La modification n'a pas été effectuée"]);         
        }
    }
}else{
    // On gère l'erreur
    http_response_code(405);
    echo json_encode(["message" => "La méthode n'est pas autorisée"]);
}