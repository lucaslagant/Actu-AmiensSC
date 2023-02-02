<?php
include dirname(__FILE__)."/templates/header.php";
   
include "../db.php";
$db = connexionBase();
$id = $_GET["id"];
$requete = $db->prepare("SELECT * FROM joueurs WHERE id=?");
$requete->execute(array($id));
$player = $requete->fetch(PDO::FETCH_OBJ);

$requete->closeCursor();

?>

    <div>
        <div class="row p-3">
            <h1 class="col-10"><?= $player->nom?>  <?=$player->prenom?></h1>
        </div>
        <table>
        
            <tr>
                <td class="p-3">
                    <span class="fs-3" hidden><?=$player->id?></span>
                </td>
                <td class="p-3">
                    <img src="/../site/img/<?= $player->img_joueur ?>" alt="<?= $player->img_joueur ?>" class="w-50">
                </td>
                <td class="p-3">
                    <span class="fs-3">NOM :<?=$player->nom?></span>
                </td>
                <td class="p-3">
                    <span class="fs-3">PRENOM :<?=$player->prenom?></span>
                </td>

                <td class="p-3">
                    <span class="fs-3">N° :<?=$player->numero_maillot?></span>
                </td>
                <td class="p-3">
                    <span class="fs-3">DATE DE NAISSANCE :<?=$player->date_anniversaire?></span>
                </td>
                <td class="p-3">
                    <span class="fs-3">NATIONALITE :</span><?=$player->nationalite?>
                </td>
                <td class="p-3">
                    <span class="fs-3">POSTE :</span><?=$player->poste?>
                </td>
                <td class="p-3">
                    <span class="fs-3">AGE :</span><?=$player->age?>
                </td>
                <td>
                    <span class="fs-3">TAILLE :</span><?=$player->taille?> cm
                </td>
                <td>
                    <span class="fs-3">TEMPS DE JEU :</span><?=$player->temps_de_jeu?> min.
                </td>
                <td>
                    <span class="fs-3">CARTONS JAUNES :</span><?=$player->cartons_jaunes?>
                </td>
                <td>
                    <span class="fs-3">CARTONS ROUGES :</span><?=$player->cartons_rouges?>
                </td>
                <td>
                    <span class="fs-3">BUTS :</span><?=$player->buts_marques?>
                </td>
                <td>
                    <span class="fs-3">PASSES DECISIVES :</span><?=$player->passes_decisives?>
                </td>
            </tr>
        </table>
        <a href="equipe.php">Voir l'equipe</a>

<?php
include dirname(__FILE__)."/templates/footer.php";
?>