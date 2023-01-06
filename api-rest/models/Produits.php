<?php

class Produits{

    // connexion
    private $connexion;
    private $table = "produits";

    // Appel des colonnes sur lesquel on veut travailler
    public $id;
    public $nom;
    public $description;
    public $prix;
    public $categories_id;
    public $categories_nom;
    public $created_at;

    // usage de $db pour la connexion à la bdd 

    // @param $db
    public function __construct($db){
        $this->connexion = $db;
    }

    // Lecture des produits
    // @return void 
    public function lire(){
        $sql = "SELECT c.nom as categories_nom, p.id, p.nom,p.description, p.prix, p.categories_id, p.created_at FROM" . $this->table . "p LEFT JOIN categories c 
        ON  p.categories_id = c.id ORDER BY p.created_at DESC";

        $query = $this->connexion->prepare($sql);
        $query->execute();

        return $query;
        // Pas de fetch pour le moment ont le ferra dans notre fichier API ici lire.php
    }
}
?>