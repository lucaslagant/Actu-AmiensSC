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

    /**
     * Créer un produit
     *
     * @return void
     */
    public function creer(){

        // Ecriture de la requête SQL en y insérant le nom de la table
        $sql = "INSERT INTO " . $this->table . " SET id=:id, nom=:nom, prenom=:prenom, numero_maillot=:numero_maillot,  date_anniversaire=:date_anniversaire, date_arrivee=:date_arrivee, nationnalite=:nationnalite,  poste=:poste, age=:age, taille=:taille, match_joues=:match_joues, temps_de_jeu=:temps_de_jeu, cartons_jaunes=:cartons_jaunes, cartons_rouges=:cartons_rouges, buts_marques=:buts_marques, passes_decisives=:passes_decisives, joueurs_type=:joueurs_type";

        // Préparation de la requête
        $query = $this->connexion->prepare($sql);

        // Protection contre les injections
        $this->id=htmlspecialchars(strip_tags($this->id));
        $this->nom=htmlspecialchars(strip_tags($this->nom));
        $this->prenom=htmlspecialchars(strip_tags($this->prenom));
        $this->numero_maillot=htmlspecialchars(strip_tags($this->numero_maillot));
        $this->date_anniversaire=htmlspecialchars(strip_tags($this->date_anniversaire));
        $this->date_arrivee=htmlspecialchars(strip_tags($this->date_arrivee));
        $this->nationnalite=htmlspecialchars(strip_tags($this->nationnalite));
        $this->poste=htmlspecialchars(strip_tags($this->poste));
        $this->age=htmlspecialchars(strip_tags($this->age));
        $this->taille=htmlspecialchars(strip_tags($this->taille));
        $this->match_joues=htmlspecialchars(strip_tags($this->match_joues));
        $this->temps_de_jeu=htmlspecialchars(strip_tags($this->temps_de_jeu));
        $this->cartons_jaunes=htmlspecialchars(strip_tags($this->cartons_jaunes));
        $this->cartons_rouges=htmlspecialchars(strip_tags($this->cartons_rouges));
        $this->buts_marques=htmlspecialchars(strip_tags($this->buts_marques));
        $this->passes_decisives=htmlspecialchars(strip_tags($this->passes_decisives));
        $this->joueurs_type=htmlspecialchars(strip_tags($this->joueurs_type));

        // Ajout des données protégées
        $query->bindParam(":id", $this->id);
        $query->bindParam(":nom", $this->nom);
        $query->bindParam(":prenom", $this->prenom);
        $query->bindParam(":numero_maillot", $this->numero_maillot);
        $query->bindParam(":date_anniversaire", $this->date_anniversaire);
        $query->bindParam(":date_arrivee", $this->date_arrivee);
        $query->bindParam(":nationnalite", $this->nationnalite);
        $query->bindParam(":poste", $this->poste);
        $query->bindParam(":age", $this->age);
        $query->bindParam(":taille", $this->taille);
        $query->bindParam(":match_joues", $this->match_joues);
        $query->bindParam(":temps_de_jeu", $this->temps_de_jeu);
        $query->bindParam(":cartons_jaunes", $this->cartons_jaunes);
        $query->bindParam(":cartons_rouges", $this->cartons_rouges);
        $query->bindParam(":buts_marques", $this->buts_marques);
        $query->bindParam(":passes_decisives", $this->passes_decisives);
        $query->bindParam(":joueurs_type", $this->joueurs_type);

        // Exécution de la requête
        if($query->execute()){
            return true;
        }
        return false;
    }
}