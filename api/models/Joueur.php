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
    public $temps_de_jeu;
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

     /**
     * Mettre à jour un produit
     *
     * @return void
     */
    public function modifier(){
        // On écrit la requête
        $sql = "UPDATE " . $this->table . " SET num = :num, journee = :journee,  point = :point, gagne = :gagne, `null` = :null, perdu = :perdu,  diff = :diff WHERE equipe = :equipe";
        
        // On prépare la requête
        $query = $this->connexion->prepare($sql);
        
        // On sécurise les données
        $this->num=htmlspecialchars(strip_tags($this->num));
        $this->journee=htmlspecialchars(strip_tags($this->journee));
        $this->point=htmlspecialchars(strip_tags($this->point));
        $this->gagne=htmlspecialchars(strip_tags($this->gagne));
        $this->null=htmlspecialchars(strip_tags($this->null));
        $this->perdu=htmlspecialchars(strip_tags($this->perdu));
        $this->diff=htmlspecialchars(strip_tags($this->diff));
        $this->equipe=htmlspecialchars(strip_tags($this->equipe));
        
        // On attache les variables
        $query->bindParam(':num', $this->num);
        $query->bindParam(':journee', $this->journee);
        $query->bindParam(':point', $this->point);
        $query->bindParam(':gagne', $this->gagne);
        $query->bindParam(':null', $this->null);
        $query->bindParam(':perdu', $this->perdu);
        $query->bindParam(':diff', $this->diff);
        $query->bindParam(':equipe', $this->equipe);
        
        // On exécute
        if($query->execute()){
            return true;
        }
        
        return false;
    }
}