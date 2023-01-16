<?php
class Joueur{
    // Connexion
    private $connexion;
    private $table = "joueurs";

    // object properties
    public $id;
    public $nom;
    public $prenom;
    public $numero_maillot;
    public $date_anniversaire;
    public $date_arrivee;
    public $nationalite;
    public $poste;
    public $age;
    public $taille;
    public $matchs_joues;
    public $temp_de_jeu;
    public $cartons_jaunes;
    public $cartons_rouges;
    public $buts_marques;
    public $passes_decisives;
    public $joueurs_type;


    /**
     * Constructeur avec $db pour la connexion à la base de données
     *
     * @param $db
     */
    public function __construct($db){
        $this->connexion = $db;
    }

    /**
     * Lecture des produits
     *
     * @return void
     */
    public function lire(){
        // On écrit la requête
        $sql = "SELECT id, nom, prenom, numero_maillot, date_anniversaire, date_arrivee, nationalite, poste, age, taille, matchs_joues, temps_de_jeu, cartons_jaunes, cartons_rouges, buts_marques, passes_decisives, joueurs_type FROM " . $this->table . " ORDER BY id ASC";

        // On prépare la requête
        $query = $this->connexion->prepare($sql);

        // On exécute la requête
        $query->execute();

        // On retourne le résultat
        return $query;
    }
}