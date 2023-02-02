<?php
class Staff{
    // Connexion
    private $connexion;
    private $table = "staff";

    // object properties
    public $id;
    public $nom;
    public $prenom;
    public $fonction;
    public $date_arrivee;
    public $nationalite;
    public $age;
    public $staff_type;


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
        $sql = "SELECT id, nom, prenom, fonction, date_arrivee, nationalite, age, staff_type FROM " . $this->table . " ORDER BY id ASC";

        // On prépare la requête
        $query = $this->connexion->prepare($sql);

        // On exécute la requête
        $query->execute();

        // On retourne le résultat
        return $query;
    }
}