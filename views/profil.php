<?php
include dirname(__FILE__)."/templates/header.php";
// Appelle d'un fichier init qui contient juste un session_start 
require_once(dirname(__FILE__).'/../utils/init.php');
$bdd = new PDO('mysql:host=localhost; dbname=amiens_sc', 'admin' , 'Parker.2280700');
$requete = $bdd->prepare("SELECT * FROM user WHERE id=".$_SESSION["user"]["id"]."");
$requete->execute(array());
$tab = $requete->fetch(PDO::FETCH_OBJ);
$requete->closeCursor();
// var_dump($tab);
// var_dump($_SESSION["user"]);

?>
<section class="text-rose-800 p-16">

<div class="flex justify-center p-10">
    <div class="bg-red-200 flex flex-row p-14 rounded-lg">

        <div class="pt-10 pr-10">
            <img src="/asset/img/user.png" alt="User par défaut" class="rounded-full h-48">
        </div>

        <div class="text-lg tracking-wide bg-rose-50 rounded-lg">
            <div class="p-8">
                <input type="hidden" name="id" value="<?=$tab->id?>">
                <span class="font-semibold">Nom:</span>
                <span><?=$tab->nom?></span>
            </div>
            <div class="p-8">
                <span class="font-semibold">Prenom:</span>
                <span><?=$tab->prenom?></span>
            </div>
            <div class="p-8">
                <span class="font-semibold">Adresse mail :</span>
                <span><?=$tab->email?></span>
            </div>                  
            <div class="pb-10">
                <a href="/controllers/modifUser-ctrl.php?id=<?=$tab->id?>" class="ml-6 block text-rose-800 inline-block mt-0 hover:text-rose-800 bg-rose-300 hover:bg-white px-5 py-2 rounded-full">Modifier</a>
                <a href="/controllers/deconnection.php?id=<?=$tab->id?>" class="ml-6 block text-rose-50 inline-block mt-0 hover:text-rose-800 bg-rose-800 hover:bg-white px-5 py-2 rounded-full">Déconnexion</a>
            </div>
        </div>
    </div>
</div>

</section>

<?php
include dirname(__FILE__)."/templates/footer.php";
?>