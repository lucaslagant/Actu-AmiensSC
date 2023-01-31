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

<?php
include dirname(__FILE__)."/templates/header.php";
?>
        <br>
        <h1 class="text-lg text-rose-800 font-bold text-4xl mx-7 max-md:text-lg">Les Transferts de l'Amiens SC</h1>
        <br><br>
        <?php foreach($tab as $transf): ?>
            <?php foreach($tab1 as $image): ?>
                <?php if($transf->id == $image->id): ?>
                    <div class="text-lg flex-wrap">
                        <div class="flex flex-col justify-center">          
                            <div class="flex justify-center l"><img class="w-1/4 h-1/4 max-md:w-1/2 max-md:h-1/2" src="joueur/<?= $image->img ?>" alt="<?= $transf->prenom ?> &nbsp; <?= $transf->nom ?>" ></div><br>
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
<?php
include dirname(__FILE__)."/templates/footer.php";
?>