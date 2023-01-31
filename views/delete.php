<?php
$bdd = new PDO('mysql:host=localhost; dbname=amiens_sc', 'admin' , 'Parker.2280700');

if (!empty($_GET['id'])) {
    $id = (int) $_GET['id'];
    $req = $bdd->prepare("DELETE FROM user WHERE id=:id;");
    $req->execute([':id'=>$id]);
    $response = ['succes' => 'Utilisateur supprimée .'];
    echo json_encode($response);
    exit;
}
?>