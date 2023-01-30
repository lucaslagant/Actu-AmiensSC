<?php
    include "db.php";
    $db = connexionBase();

    $requete = $db->query("SELECT * FROM transferts_2022_2023 JOIN joueurs ON joueurs.id = transferts_2022_2023.joueurs_id ORDER BY transferts_2022_2023.id ASC");
    $tab = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Transfert</title>
</head>
<body style="background-color:#ffe4e6">
    <nav class="flex overflow-auto items-center justify-between flex-wrap bg-rose-200 p-10">
        <div class="flex items-center flex-shrink-0 text-rose-800 mr-6">
            <a href="Index.php"><span class="font-bold text-xl tracking-tight">Logo</span></a>
        </div>

        <div class="lg:flex lg:items-center lg:w-auto">
            <div>
                <button class="block text-xl text-rose-100 inline-block mt-0 hover:text-white bg-rose-800 hover:bg-rose-700 px-5 py-2 rounded-full" id="burger"><i class='bx bx-menu'></i></button>
            </div>
            <div id="sidemenu" class="invisible"><?php include('Page_Navbar.php'); ?></div>
        </div>
        <br>
        <?php foreach($tab as $transf): ?>
            <table>
                <tr>
                    <td><?= $transf->nom ?> &nbsp; <?= $transf->prenom ?></td>
                    <td><?= $transf->valeur_joueur ?></td>
                    <td><?= $transf->club_depart ?></td>
                    <td><?= $transf->club_arrivee ?></td>
                    <td><?= $transf->montant ?></td>
                    <td><?= $transf->date ?></td>
                </tr>

            </table>

        <?php endforeach; ?>   

        <?php include('Footer.php'); ?>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>
</html>