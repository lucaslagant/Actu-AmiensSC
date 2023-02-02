<?php
    include dirname(__FILE__)."/assets/php/db.php";
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
    <title>Classement</title>
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
    <br><h1 class="text-lg text-rose-800 font-bold text-4xl mx-7 max-md:text-lg">Le Classement de la Ligue 2 BKT</h1><br>
    <div class=" shadow-md rounded-xl  overflow-hidden mx-7">
        <table class="table-auto w-full text-sm text-left text-rose-300">
            <thead class="text-xs  uppercase bg-rose-800 text-rose-300 overflow-hidden">
                <tr>
                    <th scope="col" class="px-6 py-3 text-lg max-md:text-base max-md:w-1/3">
                        <div class="flex justify-center">
                            num
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3 text-lg max-md:text-base max-md:w-1/3">
                        equipe
                    </th>
                    <th scope="col" class="px-6 py-3 text-lg  max-lg:hidden max-md:text-base">
                        <div class="flex justify-center">
                            journee
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3 text-lg max-lg:hidden max-md:text-base">
                        <div class="flex justify-center">
                            match gagne
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3 text-lg  max-lg:hidden max-md:text-base">
                        <div class="flex justify-center">
                            match nul
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3 text-lg  max-lg:hidden max-md:text-base">
                        <div class="flex justify-center">
                            match perdu
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3 text-lg  max-lg:hidden max-md:text-base">
                        <div class="flex justify-center">
                            différence de but
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3 text-lg  max-md:text-base max-md:w-1/3">
                        <div class="flex justify-center max-md:justify-start">
                            points
                        </div>   
                    </th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($tab as $clas):?> 
                    <tr class=" border-b bg-rose-700 border-rose-700 ">
                        <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-white text-lg max-md:text-base">
                            <div class="flex justify-center">
                                <?= $clas->num ?>
                            </div>
                        </th>
                        <td class="px-6 py-4">
                            <div class="flex">
                                <div class="xl:flex w-3/4">
                                    <div class="max-md:w-100 max-md:h-200">
                                        <img src="assets/image/equipe/<?= $clas->img ?>" alt="<?= $clas->equipe ?>" >
                                    </div>
                                    <div class="md:py-11 text-lg max-md:text-base">
                                        <?= $clas->equipe ?>
                                    </div>
                                </div>
                                <div class="py-11 w-1/4">
                                    <?php if($clas->num <= 2):?>
                                        <svg class="h-8 w-8 text-rose-300"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7l4-4m0 0l4 4m-4-4v18"/>
                                        </svg>
                                    <?php elseif($clas->num >= 17):?>
                                        <svg class="h-8 w-8 text-rose-300"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 17l-4 4m0 0l-4-4m4 4V3"/>
                                        </svg>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-lg max-lg:hidden max-md:text-base">
                            <div class="flex justify-center">
                                <?= $clas->journee ?>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-lg max-lg:hidden max-md:text-base">
                            <div class="flex justify-center">
                                <?= $clas->gagne ?>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-lg max-lg:hidden max-md:text-base">
                            <div class="flex justify-center">
                                <?= $clas->null ?>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-lg max-lg:hidden max-md:text-base">
                            <div class="flex justify-center">
                                <?= $clas->perdu ?>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-lg max-lg:hidden max-md:text-base">
                            <div class="flex justify-center">
                                <?= $clas->diff ?>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-lg max-md:text-base">
                            <div class="flex justify-center max-md:justify-start">
                                <?= $clas->point ?>
                            </div> 
                        </td>
                    </tr>
                <?php endforeach; ?> 
            </tbody>      
        </table>
    </div>
    <div class="flex mx-7 text-rose-800 text-lg">
        <div class="flex">
            <svg class="h-8 w-8"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7l4-4m0 0l4 4m-4-4v18"/>
            </svg>
            <p>: Ligue 1</p>
        </div>
        <div class="flex ml-2">
            <svg class="h-8 w-8"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 17l-4 4m0 0l-4-4m4 4V3"/>
            </svg>
            <p>: National</p>
        </div>
    </div> 
    <br>       
    <?php include('templates/Footer.php'); ?>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>
</html>