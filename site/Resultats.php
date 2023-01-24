<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body style="background-color: #fff1f2">

    <!-- Pour rétrécir la page un peu (ajouter /div en bas) -->
    <!-- <div class="w-full px-64 mx-auto"> -->

    <!-- Barre de navigation -->
    <nav class="flex items-center justify-between flex-wrap bg-rose-200 p-10">
        <div class="flex items-center flex-shrink-0 text-rose-800 mr-6">
            <a href="Index.php"><span class="font-bold text-xl tracking-tight">Logo</span></a>
        </div>

        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
            <div class="text-base lg:flex-grow">
                <a href="#" class="block text-rose-800 lg:inline-block lg:mt-0 hover:text-rose-500 mr-5">Actualités</a>
                <a href="#" class="block text-rose-800 lg:inline-block lg:mt-0 hover:text-rose-500 mr-5">Équipe</a>
                <a href="#" class="block text-rose-800 lg:inline-block lg:mt-0 hover:text-rose-500 mr-5">Contact</a>
                <a href="#" class="block text-rose-800 lg:inline-block lg:mt-0 hover:text-rose-500 mr-5">Classement</a>
                <a href="#" class="block text-rose-800 lg:inline-block lg:mt-0 hover:text-rose-500 mr-5">Résultats</a>
                <a href="#" class="block text-rose-800 lg:inline-block lg:mt-0 hover:text-rose-500 mr-5">Match à venir</a>
            </div>
            <div>
                <a href="Connexion.php"
                    class="block text-rose-100 inline-block mt-0 hover:text-white bg-rose-800 hover:bg-rose-700 px-5 py-2 rounded-full">Se
                    connecter</a>
            </div>
        </div>
    </nav>

    <!-- Section d'accès aux joueurs -->
    <section class="bg-rose-100"> <!-- style="background-color: #ffffff;" -->
        <br><br><br>

        <div class="flex flex-col items-center">

            <div class="flex justify-center">
                <!-- Cliquer pour aller à la page de joueurs -->
                <img src="img/headers/ASC_complet.jpeg" alt="Image de test" class="w-1/2">
                <!-- "transition duration-500 ease-in-out" à revoir -->
            </div>

            <!-- Rendre cliquable aussi ? -->
            <div class="text-4xl mt-20">
                <a href="Equipe.php"><span class="text-rose-800 font-bold hover:underline underline-offset-8">Voir le club</span></a>
            </div>

        </div>

        <br><br><br>
    </section>

    <!-- Section accès résultats/classement/calendrier -->
    <section class="bg-rose-100">
        <br><br><br><br>

        <div class="flex justify-center">

            <!-- Card des matchs passés -->
            <a href="#" class="px-4"> <!-- Renvoie vers tous les matchs -->
                <div class="mx-4 px-4 py-4 overflow-x-auto">
                    <div class="flex flex-col md:flex-row md:max-w-xl rounded-lg bg-white shadow-lg p-12">

                        <div class="flex lg:flex-col md:flex-col sm:flex-row">
                            <!-- Col pour superposer les images en lg et md, row pour aligner en sm -->
                            <img class="w-24 md:h-auto object-cover" src="img/Bordeaux.png" alt="EquipeUne" />
                            <img class="w-24 md:h-auto object-cover" src="img/Amiens.png" alt="EquipeDeux" />
                        </div>

                        <div class="p-6 flex flex-col justify-start border-r-2">
                            <span class="text-gray-700 text-base mb-14">Nom équipe<br></span>
                            <span class="text-gray-700 text-base mb-10">Nom équipe</span>

                            <p class="text-gray-600 text-xs flex justify-end">Terminé : 09/01</p>
                        </div>

                        <div class="p-6 flex flex-col">
                            <span class="text-gray-700 text-base ml-4 mb-14">2<br></span>
                            <span class="text-gray-700 text-base ml-4">0</span>
                        </div>
                        

                    </div>
                    <div class=" flex justify-center">
                                <a href="Resultats.php"
                                class="block text-rose-100 inline-block hover:text-white bg-rose-800 hover:bg-rose-700 px-5 py-2 mt-3  items-center self-auto rounded-full"> Résultats</a>
                    </div>
                </div>
            </a>
        </div>
        <br><br><br><br>
    </section>

    <!-- Réseaux sociaux de l'équipe et ? -->
    <section style="background-image: url('img/headers/pinkback.jpg')" class="bg-cover">
        <div>
            <br><br><br><br><br><br><br><br><br><br><br>
            <ul class="flex justify-start ml-60 text-3xl">
                <li
                    class="bg-rose-300 mr-8 mb-8 rounded-full border-2 border-rose-400 p-2 hover:border-rose-300 hover:bg-rose-300">
                    <a href="https://www.facebook.com/AmiensSC" class="p-1 bx-flashing-hover" target="_blank"><i class='bx bxl-facebook center'
                            style='color:#9f1239'></i></a>
                </li>
                <li
                    class="bg-rose-300 mr-8 mb-8 rounded-full border-2 border-rose-400 p-2 hover:border-rose-300 hover:bg-rose-300">
                    <a href="https://twitter.com/" class="p-1 bx-flashing-hover" target="_blank"><i class='bx bxl-twitter'
                            style='color:#9f1239'></i></a>
                </li>
                <li
                    class="bg-rose-300 mr-8 mb-8 rounded-full border-2 border-rose-400 p-2 hover:border-rose-300 hover:bg-rose-300">
                    <a href="https://www.instagram.com/?hl=fr" class="p-1 bx-flashing-hover" target="_blank"><i class='bx bxl-instagram'
                            style='color:#9f1239'></i></a>
                </li>
                <li
                    class="bg-rose-300 mb-8 rounded-full border-2 border-rose-400 p-2 hover:border-rose-300 hover:bg-rose-300">
                    <a href="http://www.amiensfootball.com/" class="p-1 bx-flashing-hover" target="_blank"><i class='bx bx-football'
                            style='color:#9f1239'></i></a>
                </li>
            </ul>
        </div>
    </section>




    <!-- Footer -->

    <?php include('Footer.php'); ?>

    <!-- </div> -->


    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>

</html>