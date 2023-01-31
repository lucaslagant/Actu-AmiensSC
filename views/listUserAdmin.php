<?php
require_once(dirname(__FILE__).'/../utils/init.php');
$bdd = new PDO('mysql:host=localhost; dbname=amiens_sc', 'admin' , 'Parker.2280700');

$req = $bdd->prepare('SELECT * FROM user ORDER BY id DESC');
$req->execute();
$users = $req->fetchAll(PDO::FETCH_OBJ);
include dirname(__FILE__)."/templates/header.php";
?>
<section class="text-rose-800 p-16">
    <h1 class="mb-10 text-2xl text-center text-rose-800">Liste des utilisateurs</h1>
    <table class="table-auto w-full mt-5">
        <thead>
            <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if ($users):
                    foreach ($users as $user):?>           
                    <tr class="border border-black h-20">
                        <td class="text-center"><?=$user->nom?></td>
                        <td class="text-center"><?=$user->prenom?></td>
                        <td class="text-center"><?=$user->email?></td>
                        <td class="text-center"><a class="delete" href="/views/delete.php?id=<?=$user->id;?>"><i class='bx bx-x-circle'></i></a></td>     
                    </tr>
                <?php
                    endforeach; endif;
                ?>
        </tbody>
    </table>
</section>
<?php
include dirname(__FILE__)."/templates/footer.php";
?>