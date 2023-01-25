<?php
// Appelle d'un fichier init qui contient juste un session_start 
require_once(dirname(__FILE__).'/../utils/init.php');

// Supprime une variable
unset($_SESSION["user"]);

header("Location: /../index.php");
?>