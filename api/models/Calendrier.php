<?php
class Calendrier{
    // Connexion
    private $connexion;
    private $table = "calendrier";

    // object properties
    public $journee;
    public $stade;
    public $lieu;
    public $date;
    public $equipe;
    public $img;
    public $score;
    public $localisation;

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
        $sql = "SELECT journee, stade, lieu, `date`, equipe, img, score, localisation FROM " . $this->table . " ORDER BY journee ASC";

        // On prépare la requête
        $query = $this->connexion->prepare($sql);

        // On exécute la requête
        $query->execute();

        // On retourne le résultat
        return $query;
    }
}