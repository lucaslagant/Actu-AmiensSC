<?php
class Transferts{
    // Connexion
    private $connexion;
    private $table = "transferts_2022_2023";

    // object properties
    public $id;
    public $nom;
    public $prenom;
    public $valeur_joueur;
    public $club_depart;
    public $club_arrivee;
    public $montant;
    public $date;


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
        $sql = "SELECT t.id, j.nom, j.prenom, t.valeur_joueur, t.club_depart, t.club_arrivee, t.montant, t.`date` FROM " . $this->table . " t JOIN joueurs j ON j.id =t.joueurs_id ORDER BY id ASC";

        // On prépare la requête
        $query = $this->connexion->prepare($sql);

        // On exécute la requête
        $query->execute();

        // On retourne le résultat
        return $query;
    }
}