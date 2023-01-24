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

            <!-- Rendre cliquable aussi ? -->
            <div class="text-4xl mt-20">
                <a href="Equipe.php">
                    <span class="flex justify-center w-72">
                        <img src="https://upload.wikimedia.org/wikipedia/fr/thumb/b/bf/Logo_Amiens_SC_-_2022.svg/1200px-Logo_Amiens_SC_-_2022.svg.png" alt="">
                    </span>
                </a>
            </div>

        </div>

        <br>
    </section>

    <!-- Section accès résultats/classement/calendrier -->
    <section class="bg-rose-100">
        <br>

        <div class="flex justify-center">
            <!-- Card classement des ékip -->
            <div class="px-4"> <!-- Classe originale : "container mx-auto" -->
                <div class="py-8">
                    <div class="mx-4 px-4 py-4 overflow-x-auto">
                        <div class="inline-block shadow-lg rounded-lg overflow-hidden">
                            <table class="min-w-full leading-normal">
                                <thead>
                                    <tr>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            #
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Équipe
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Match(s)
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Pts.
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- FOREACH DU TR BDD POUR LE CLASSEMENT -->
                                    <tr>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">1</p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 w-10 h-10">
                                                    <img class="w-full h-full rounded-full"
                                                        src="https://images.unsplash.com/photo-1601046668428-94ea13437736?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2167&q=80"
                                                        alt="" />
                                                </div>
                                                <div class="ml-3">
                                                    <p class="text-gray-900 whitespace-no-wrap">
                                                        FTeam
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap text-center">10</p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap text-center">
                                                26
                                            </p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">2</p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 w-10 h-10">
                                                    <img class="w-full h-full rounded-full" src="img/Logo_Amiens_SC.png"
                                                        alt="" />
                                                </div>
                                                <div class="ml-3">
                                                    <p class="text-gray-900 whitespace-no-wrap">
                                                    <a href="Equipe.php">Amiens SC</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap text-center">53</p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap text-center">
                                                15
                                            </p>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class=" flex justify-center">
                            <a href="Resultats.php"
                            class="block text-rose-100 inline-block hover:text-white bg-rose-800 hover:bg-rose-700 px-5 py-2 mt-3  items-center self-auto rounded-full">Détails des matchs</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>




    <!-- Footer -->

    <?php include('Footer.php'); ?>

    <!-- </div> -->


    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>

</html>