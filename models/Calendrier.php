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

    /**
     * Mettre à jour un produit
     *
     * @return void
     */
    public function modifier(){
        // On écrit la requête
        $sql = "UPDATE " . $this->table . " score WHERE journee = :journee";
        
        // On prépare la requête
        $query = $this->connexion->prepare($sql);
        
        // On sécurise les données
        $this->score=htmlspecialchars(strip_tags($this->score));
        $this->journee=htmlspecialchars(strip_tags($this->journee));
        
        // On attache les variables
        $query->bindParam(':score', $this->score);
        $query->bindParam(':journee', $this->journee);
        
        // On exécute
        if($query->execute()){
            return true;
        }
        
        return false;
    }
}