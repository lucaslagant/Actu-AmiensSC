<?php
    include dirname(__FILE__)."/assets/php/db.php";
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
    <link href='assets/css/transfert.css' rel='stylesheet'>
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
            <div id="sidemenu" class="invisible"><?php include('templates/Page_Navbar.php'); ?></div>
        </div>
    </nav>

        <div class="btn text-rose-500 hover:text-rose-400">
            <svg class="h-8 w-8 icon"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  
                <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="12" cy="12" r="9" />  <line x1="12" y1="8" x2="8" y2="12" />  <line x1="12" y1="8" x2="12" y2="16" />  <line x1="16" y1="12" x2="12" y2="8" />
            </svg>
        </div>
        <br>
        <?php foreach($tab as $transf): ?>
            <?php foreach($tab1 as $image): ?>
                <?php if($transf->id == $image->id): ?>
                    <div class="text-lg flex-wrap">
                        <div class="flex flex-col justify-center">          
                            <div class="flex justify-center "><img class="w-1/4 h-1/4 max-md:w-1/2 max-md:h-1/2 rounded-lg" src="assets/image/joueur/<?= $image->img ?>" alt="<?= $transf->prenom ?> &nbsp; <?= $transf->nom ?>" ></div><br>
                            <div class="flex justify-center">
                                <div class="flex justify-center max-md:flex-co bg-rose-700 w-full text-2xl text-left text-rose-300 rounded-full text-2xl w-1/5 max-md:text-lg max-md:rounded-md max-md:w-1/2 "> <?= $transf->prenom ?> &nbsp; <?= $transf->nom ?></div>
                            </div>
                        </div>
                        <br>
                        <div class="max-md: p-5">
                            <div class="flex justify-evenly bg-rose-700 w-full text-lg text-left text-rose-300 rounded-full py-2  max-md:rounded-md max-md:flex-col">

                                <div>
                                    <div class="flex justify-center">valeur du joueur :</div>   
                                    <div class="flex justify-center"><?= $transf->valeur_joueur ?></div>
                                </div>
                                <br class="md:hidden">
                                <div>
                                    <div class="flex justify-center">transfert :</div>
                                    <div class="flex justify-center">
                                        <div class="p-1 px-2"><?= $transf->club_depart ?></div>
                                        <svg class="h-9 w-8"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                        </svg>
                                        <div class="p-1 px-2"><?= $transf->club_arrivee ?></div>
                                    </div>
                                </div>
                                <br class="md:hidden">
                                <div>
                                    <div class="flex justify-center"> montant du transfert :</div>
                                    <div class="flex justify-center"><?= $transf->montant ?></div>
                                </div>
                                <br class="md:hidden">
                                <div>
                                    <div class="flex justify-center">date du transfert :</div>
                                    <div class="flex justify-center"><?= $transf->date ?></div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <br><br>
                <?php endif; ?>  
            <?php endforeach; ?>   
        <?php endforeach; ?>   

        <?php include('templates/Footer.php'); ?>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="assets/js/transfert.js"></script>
</body>
</html>