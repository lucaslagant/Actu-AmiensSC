
<?php   
require_once(dirname(__FILE__).'/../utils/init.php');

    $bdd = new PDO('mysql:host=localhost; dbname=amiens_sc', 'admin' , 'Parker.2280700');
    $requete = $bdd->prepare("SELECT * FROM user WHERE id=".$_SESSION["user"]["id"]."");
    $requete->execute(array());
    $tab = $requete->fetch(PDO::FETCH_OBJ);
    $requete->closeCursor();
    // var_dump($tab);
    // var_dump($_SESSION["user"]);
?>
<section class="bg-rose-50">

        <div class="">
            <div class="flex justify-center text-rose-800 pt-10 pb-10">
                <div class="inline-block shadow-lg bg-rose-100 p-8 px-32 m-4">
                <form action="" method="post">
                    
                    <span class="text-3xl">Modifier les informations</span>
                    <br><br><br>
                    
                            <div class="flex flex-col">
                                <input type="hidden" name="id" value="<?=$tab->id?>">
                                <label for="nom">Nom : </label>
                                <input type="text" name="nom" value="<?=$tab->nom?>" class="rounded border-rose-300 border-2">
                                <br><br>
                                
                                <label for="prenom">Prénom : </label>
                                <input type="text" name="prenom" value="<?=$tab->prenom?>" class="rounded border-rose-300 border-2">
                                <br><br>
                                
                                <label for="email">Email : </label>
                                <input type="text" name="email" value="<?=$tab->email?>" class="rounded border-rose-300 border-2">
                                <br><br>                               
                            
                                
                                <label for="mdp">Confirmé ou changer votre mot de passe </label>
                                <input type="password" name="mdp"  class="rounded border-rose-300 border-2">
                                <br><br>
                            </div>
                  
                        
                        <div class="flex justify-center">
                            <input type="submit" value="Modifier" class="px-12 block text-rose-50 inline-block mt-0 hover:text-white bg-rose-800 hover:bg-rose-600 px-5 py-2 rounded-full">
                            <a href="/views/profil.php" class="ml-6 block text-rose-800 inline-block mt-0 hover:text-rose-800 bg-rose-300 hover:bg-white px-5 py-2 rounded-full">Retour</a>
                        </div>
                </form>
                </div>
            </div>
        </div>

    </section>
