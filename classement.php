<?php
    // $tab = json_decode(file_exists("http://127.0.0.1:8080/api/asc/lireclas.php"));

    include "db.php";
    $db = connexionBase();

    $requete = $db->query("SELECT * FROM classement ORDER BY num ASC");
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
    <title>classement</title>
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
    <div class=" shadow-md sm:rounded-lg mx-7 overflow-hidden">
        <table class="w-full text-sm text-left text-rose-500 dark:text-rose-400">
            <thead class="text-xs text-rose-900 uppercase bg-rose-50 dark:bg-rose-700 dark:text-rose-400 overflow-hidden">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        num
                    </th>
                    <th scope="col" class="px-6 py-3">
                        equipe
                    </th>
                    <th scope="col" class="px-6 py-3">
                        journee
                    </th>
                    <th scope="col" class="px-6 py-3">
                        match gagne
                    </th>
                    <th scope="col" class="px-6 py-3">
                        match null
                    </th>
                    <th scope="col" class="px-6 py-3">
                        match perdu
                    </th>
                    <th scope="col" class="px-6 py-3">
                        différence de but
                    </th>
                    <th scope="col" class="px-6 py-3">
                        point
                    </th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($tab as $clas):?> 
                    <tr class="bg-white border-b dark:bg-rose-800 dark:border-rose-700">
                        <th scope="row" class="px-6 py-4 font-medium text-rose-900 whitespace-nowrap dark:text-white">
                            <?= $clas->num ?>
                        </th>
                        <td class="px-6 py-4">
                            <div class="flex">
                                <div>
                                    <img src="equipe/<?= $clas->img ?>" alt="<?= $clas->equipe ?>">
                                </div>
                                <div class="py-9">
                                    <?= $clas->equipe ?>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <?= $clas->journee ?>
                        </td>
                        <td class="px-6 py-4">
                            <?= $clas->gagne ?>
                        </td>
                        <td class="px-6 py-4">
                            <?= $clas->null ?>
                        </td>
                        <td class="px-6 py-4">
                            <?= $clas->perdu ?>
                        </td>
                        <td class="px-6 py-4">
                            <?= $clas->diff ?>
                        </td>
                        <td class="px-6 py-4">
                            <?= $clas->point ?>
                        </td>
                    </tr>
                <?php endforeach; ?> 
            </tbody>      
        </table>
    </div>        
    <?php include('Footer.php'); ?>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>
</html>