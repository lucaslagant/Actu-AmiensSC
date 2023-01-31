<?php
    include "db.php";
    $db = connexionBase();

    $requete = $db->query("SELECT * FROM transferts_2022_2023 JOIN joueurs ON joueurs.id = transferts_2022_2023.joueurs_id ORDER BY transferts_2022_2023.id ASC");
    $tab = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();


    
    $requete1 = $db->query("SELECT * FROM `image`");
    $tab1 = $requete1->fetchAll(PDO::FETCH_OBJ);
    $requete1->closeCursor();
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
    </nav>
        <br>
        <?php foreach($tab as $transf): ?>
            <?php foreach($tab1 as $image): ?>
                <?php if($transf->id == $image->id): ?>
                    <div class="text-lg flex-wrap">
                        <div class="flex flex-col justify-center">          
                            <div class="flex justify-center"><img class="w-1/6 h-1/6" src="joueur/<?= $image->img ?>" alt="<?= $transf->prenom ?> &nbsp; <?= $transf->nom ?>" ></div><br>
                            <div class="flex justify-center">
                                <div class="flex justify-center bg-rose-700 w-full text-2xl text-left text-rose-300 rounded-full text-2xl w-1/5"> <?= $transf->prenom ?> &nbsp; <?= $transf->nom ?></div>
                            </div>
                        </div>
                        <br>
                        <div class="flex justify-evenly bg-rose-700 w-full text-lg text-left text-rose-300 rounded-full py-2">
                            <div>
                                <div class="flex justify-center">valeur du joueur :</div>   
                                <div class="flex justify-center"><?= $transf->valeur_joueur ?></div>
                            </div>
                            <div>
                                <div class="flex justify-center">transfert :</div>
                                <div class="flex">
                                    <div class="p-1 px-2"><?= $transf->club_depart ?></div>
                                    <svg class="h-9 w-8"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                    </svg>
                                    <div class="p-1 px-2"><?= $transf->club_arrivee ?></div>
                                </div>
                            </div>

                            <div>
                                <div class="flex justify-center"> montant du transfert :</div>
                                <div class="flex justify-center"><?= $transf->montant ?></div>
                            </div>

                            <div>
                                <div class="flex justify-center">date du transfert :</div>
                                <div class="flex justify-center"><?= $transf->date ?></div>
                            </div>
                        </div>
                    </div>
                    <br><br>
                <?php endif; ?>  
            <?php endforeach; ?>   
        <?php endforeach; ?>   

        <?php include('Footer.php'); ?>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>
</html>