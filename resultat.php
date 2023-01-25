<?php
    // $url = "http://127.0.0.1:8080/api/asc/lirecal.php";
	
	// $client = curl_init($url);
	// curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
	// $response = curl_exec($client);
	
	// $result = json_decode($response);
    // var_dump($result);
    
    // $tab1 = json_decode(file_exists("http://127.0.0.1:8080/api/asc/lirecal.php"));
    // var_dump($tab1);

    include "db.php";
    $db = connexionBase();

    $requete = $db->query("SELECT * FROM calendrier WHERE score != '' ORDER BY journee ASC");
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
    <title>Résultat</title>
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
    <br><h1 class="text-lg text-rose-800 font-bold text-4xl mx-7 max-md:text-lg">Les Résultat d'Amiens SC en Ligue 2</h1><br>
    <div class="p-4 m-4 max-md:p-0 max-md:m-0">
        <?php foreach ($tab as $cal):?> 
            <div class="flex text-rose-900 px-4 w-full max-md:justify-">
                <div class="text-2xl w-1/3 flex justify-center max-md:text-sm max-md:w-1/4">
                    <?= $cal->stade ?>,&nbsp; <?= $cal->lieu ?>
                </div>
                <div class="text-2xl w-1/3 flex justify-center max-md:text-sm max-md:justify-center max-md:w-2/4">
                    <?= $cal->date ?>
                </div>
                <div class="text-2xl w-1/3 flex justify-center max-md:text-sm max-md:justify-end max-md:w-1/4">
                    <?= $cal->localisation ?>
                </div>
            </div>
            
                <div class="flex bg-rose-700 w-full text-sm text-left text-rose-300 rounded-full m-3">
                    <?php if($cal->localisation == "Exterieur"): ?>
                        
                        <div class="px-9 py-4 w-1/3">
                            <div class="lg:flex">
                                <div>
                                    <img src="equipe/<?= $cal->img ?>" alt="<?= $cal->equipe ?>">
                                </div>
                                <div class="grid place-items-center text-xl max-md:text-base">
                                    <?= $cal->equipe ?>
                                </div>
                            </div>
                        </div>

                        <div class="text-3xl grid place-items-center w-1/3 max-md:text-lg">
                            <div>
                                <?= $cal->score ?>
                            </div>
                        </div>

                        <div class="px-9 py-4 w-1/3">
                            <div class="lg:flex justify-end">
                                <div class="grid place-items-center text-xl flex max-md:justify-center max-md:text-base max-lg:hidden">
                                    Amiens SC
                                </div>
                                <div>
                                    <img src="equipe/Amiens-min.png" alt="Amiens SC">
                                </div>
                                <div class="grid place-items-center text-xl flex max-md:justify-center max-md:text-base lg:hidden">
                                    Amiens SC
                                </div>        
                            </div>
                        </div>
                        
                    <?php else:?>

                        <div class="px-9 py-4 w-1/3">
                            <div class="lg:flex ">
                                <div>
                                    <img src="equipe/Amiens-min.png" alt="Amiens SC">
                                </div>
                                <div class="grid place-items-center text-xl max-md:text-base">
                                    Amiens SC
                                </div>
                            </div>
                        </div>

                        <div class="text-3xl grid place-items-center w-1/3 max-md:text-lg">
                            <div>
                                <?= $cal->score ?>
                            </div>
                        </div>


                        <div class="px-9 py-4 w-1/3 ">
                            <div class="lg:flex justify-end ">
                                <div class="grid place-items-center text-xl flex max-md:justify-center max-md:text-base max-lg:hidden">
                                    <?= $cal->equipe ?>
                                </div>
                                <div>
                                    <img src="equipe/<?= $cal->img ?>" alt="<?= $cal->equipe ?>">
                                </div>
                                <div class="grid place-items-center text-xl flex max-md:justify-center max-md:text-base lg:hidden">
                                    <?= $cal->equipe ?>
                                </div>
                                    
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            <br>
            <br class="max-md:hidden">
        <?php endforeach; ?> 
    </div>       
    <?php include('Footer.php'); ?>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>
</html>