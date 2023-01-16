<?php
// Headers requis
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// On vérifie que la méthode utilisée est correcte
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    // On inclut les fichiers de configuration et d'accès aux données
    include_once '../config/Database.php';
    include_once '../models/Joueur.php';

    // On instancie la base de données
    $database = new Database();
    $db = $database->getConnection();

    // On instancie les produits
    $calendrier = new Joueur($db);

    // On récupère les données
    $stmt = $calendrier->lire();

    // On vérifie si on a au moins 1 produit
    if($stmt->rowCount() > 0){
        // On initialise un tableau associatif
        $tableauJoueur = [];
        $tableauJoueur['joueur'] = [];

        // On parcourt les produits
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $joue = [
                "id" => $id,
                "nom" => $nom,
                "prenom" => $prenom,
                "numero_maillot" => $numero_maillot,
                "date_anniversaire" => $date_anniversaire,
                "date_arrivee" => $date_arrivee,
                "nationalite" => $nationalite,
                "poste" => $poste,
                "age" => $age,
                "taille" => $taille,
                "matchs_joues" => $matchs_joues,
                "temps_de_jeu" => $temps_de_jeu,
                "cartons_jaunes" => $cartons_jaunes,
                "cartons_rouges" => $cartons_rouges,
                "buts_marques" => $buts_marques,
                "passes_decisives" => $passes_decisives,
                "joueurs_type" => $joueurs_type
            ];

            $tableauJoueur['joueur'][] = $joue;
        }

        // On envoie le code réponse 200 OK
        http_response_code(200);

        // On encode en json et on envoie
        echo json_encode($tableauJoueur);
    }

}else{
    // On gère l'erreur
    http_response_code(405);
    echo json_encode(["message" => "La méthode n'est pas autorisée"]);
}