<?php

class Mail{

    private $_message;
    private $_to;
    private $_from;
    private $_sujet;
    private $_fromNom;
    private $_toNom;


    // Création de la méthod construct
    public function __construct($message = null, $to = null, $from = null, $sujet = null , $fromNom = null , $toNom = null){
        $this->_message = $message;
        $this->_to = $to;
        $this->_from = $from;
        $this->_sujet = $sujet;
        $this->_fromNom = $fromNom;
        $this->_toNom = $toNom;  
    }

    // Création de la fonction d'envoie

    public function send(){

        $to = $this->_toNom .'<'.$this->_to.'>';
        $sujet = $this->_sujet;
        $message = $this->_message;
        $headers = 'From: '.$this->_from . '\r\n' .
        'Reply-To: '.$this->_from . '\r\n' .
        'X-Mailer: PHP/' . phpversion();

        mail($to, $sujet, $message, $headers);
    }
}


?>