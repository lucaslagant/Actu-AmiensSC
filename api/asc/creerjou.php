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
    include_once '../models/Joueur.php';

    // On instancie la base de données
    $database = new Database();
    $db = $database->getConnection();

    // On instancie les produits
    $joueur = new Joueur($db);

    // On récupère les informations envoyées
    $donnees = json_decode(file_get_contents("php://input"));
    
    if(!empty($donnees->id) && !empty($donnees->nom) && !empty($donnees->prenom) && !empty($donnees->numero_maillot) && !empty($donnees->date_anniversaire) && !empty($donnees->date_arrivee) && !empty($donnees->nationalite) && !empty($donnees->poste) && !empty($donnees->age) && !empty($donnees->taille) && !empty($donnees->matchs_joues) && !empty($donnees->temps_de_jeu) && !empty($donnees->cartons_jaunes) && !empty($donnees->cartons_rouges) && !empty($donnees->buts_marques) && !empty($donnees->passes_decisives) && !empty($donnees->joueurs_type)){
        // Ici on a reçu les données
        // On hydrate notre objet
        $joueur->id = $donnees->id;
        $joueur->nom = $donnees->nom;
        $joueur->prenom = $donnees->prenom;
        $joueur->numero_maillot = $donnees->numero_maillot;
        $joueur->date_anniversaire = $donnees->date_anniversaire;
        $joueur->date_arrivee = $donnees->date_arrivee;
        $joueur->nationalite = $donnees->nationalite;
        $joueur->poste = $donnees->poste;
        $joueur->age = $donnees->age;
        $joueur->taille = $donnees->taille;
        $joueur->matchs_joues = $donnees->matchs_joues;
        $joueur->temps_de_jeu = $donnees->temps_de_jeu;
        $joueur->cartons_rouges= $donnees->cartons_rouges;
        $joueur->buts_marques = $donnees->buts_marques;
        $joueur->passes_decisives = $donnees->passes_decisives;
        $joueur->joueurs_type = $donnees->joueurs_type;

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