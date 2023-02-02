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
    public $joueurs_id;
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


    /**
     * Créer un produit
     *
     * @return void
     */
    public function creer(){

        // Ecriture de la requête SQL en y insérant le nom de la table
        $sql = "INSERT INTO " . $this->table . " SET id=:id, valeur_joueur=:valeur_joueur, club_depart=:club_depart, club_arrivee=:club_arrivee,  montant=:montant, joueurs_id=:joueurs_id, date=:date";

        // Préparation de la requête
        $query = $this->connexion->prepare($sql);

        // Protection contre les injections
        $this->id=htmlspecialchars(strip_tags($this->id));
        $this->valeur_joueur=htmlspecialchars(strip_tags($this->valeur_joueur));
        $this->club_depart=htmlspecialchars(strip_tags($this->club_depart));
        $this->club_arrivee=htmlspecialchars(strip_tags($this->club_arrivee));
        $this->montant=htmlspecialchars(strip_tags($this->montant));
        $this->joueurs_id=htmlspecialchars(strip_tags($this->joueurs_id));
        $this->date=htmlspecialchars(strip_tags($this->date));

        // Ajout des données protégées
        $query->bindParam(":id", $this->id);
        $query->bindParam(":valeur_joueur", $this->valeur_joueur);
        $query->bindParam(":club_depart", $this->club_depart);
        $query->bindParam(":club_arrivee", $this->club_arrivee);
        $query->bindParam(":montant", $this->montant);
        $query->bindParam(":joueurs_id", $this->joueurs_id);
        $query->bindParam(":date", $this->date);

        // Exécution de la requête
        if($query->execute()){
            return true;
        }
        return false;
    }
}