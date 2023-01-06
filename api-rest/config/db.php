<?php
class Database{
//    Connexion à la base de données 
    private $host = "localhost";
    private $db_name = "api_rest";
    private $username = "admin";
    private $password = "Parker.2280700";
    public $connexion;

    
    public function getConnection(){

        $this->connexion = null;

        try {
            $this->connexion = new PDO("mysql:host=" . $this->host .";
            dbname=" . $this->db_name, $this->username, $this->password);
        } catch (PDOExeption $e) {
            echo "Erreur de connexion : " . $e->getMessage();
        }

        return $this->connexion;
    }
}

?>