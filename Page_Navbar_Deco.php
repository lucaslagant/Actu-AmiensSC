<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <!-- Sidebar pour quand l'utilisateur n'est pas connecté -->

    <!-- Sidebar -->
    <div class="bg-rose-100 text-rose-800">

        <!-- Modifier w- pour la taille -->
        <div class="fixed flex flex-col top-0 right-0 w-64 bg-rose-300 h-full border-l">
            <div class="flex items-center justify-center h-20 border-b text-2xl">
                <div>Menu</div>
            </div>

            <!-- Overflow pour scroll si la barre est trop longue -->
            <div class="overflow-y-auto overflow-x-hidden flex-grow">
                <ul class="flex flex-col py-4 space-y-1">
                    <li class="px-5">
                        <div class="flex flex-row items-center h-8">
                            <div class="text-lg tracking-wide text-rose-700">Site</div>
                        </div>
                    </li>

                    <li>
                        <a href="Index.php"
                            class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-rose-50 text-rose-700 hover:text-rose-500 border-l-4 border-transparent hover:border-blue-300 pl-6">
                            <span class="inline-flex justify-center items-center ml-4">
                                <i class='bx bx-home-alt'></i>
                            </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Accueil</span>
                        </a>
                    </li>

                    <li>
                        <a href="Equipe.php"
                            class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-rose-50 text-rose-700 hover:text-rose-500 border-l-4 border-transparent hover:border-purple-300 pl-6">
                            <span class="inline-flex justify-center items-center ml-4">
                                <i class='bx bx-football'></i>
                            </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Équipe</span>
                        </a>
                    </li>

                    <li>
                        <a href="#"
                            class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-rose-50 text-rose-700 hover:text-rose-500 border-l-4 border-transparent hover:border-yellow-300 pl-6">
                            <span class="inline-flex justify-center items-center ml-4">
                                <i class='bx bx-news'></i>
                            </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Actualité</span>
                        </a>
                    </li>

                    <li>
                        <a href="Contact.php"
                            class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-rose-50 text-rose-700 hover:text-rose-500 border-l-4 border-transparent hover:border-green-300 pl-6">
                            <span class="inline-flex justify-center items-center ml-4">
                                <i class='bx bx-envelope'></i>
                            </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Contact</span>
                        </a>
                    </li>

                    <li class="px-5">
                        <div class="flex flex-row items-center h-8">
                            <div class="text-lg tracking-wide text-rose-700">Compte</div>
                        </div>
                    </li>

                    <li>
                        <a href="Connexion.php"
                            class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-rose-50 text-rose-700 hover:text-rose-500 border-l-4 border-transparent hover:border-cyan-300 pl-6">
                            <span class="inline-flex justify-center items-center ml-4">
                                <i class='bx bx-log-in'></i>
                            </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Se connecter</span>
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center justify-center h-20  border-t border-b text-2xl" id="fermer">
                            <button><i class='bx bx-x pr-2 text-lg'></i>Fermer</button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <script src="script.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>

</html>