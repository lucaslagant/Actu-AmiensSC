<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actu-AmiensSC</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body style="background-color: #fff1f2">

    <!-- Pour rétrécir la page un peu (ajouter /div en bas) -->
    <!-- <div class="w-full px-64 mx-auto"> -->

    <!-- Barre de navigation -->
    <nav class="flex items-center justify-between flex-wrap bg-rose-200 p-10">
        <div class="flex items-center flex-shrink-0 text-rose-800 mr-6">
            <a href="index.php"><span class="font-bold text-xl tracking-tight">Logo</span></a>
        </div>

        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
            <div class="text-base lg:flex-grow">
                <a href="/../index.php" class="block text-rose-800 lg:inline-block lg:mt-0 hover:text-rose-500 mr-5">Accueil</a>
                <a href="/views/equipe.php" class="block text-rose-800 lg:inline-block lg:mt-0 hover:text-rose-500 mr-5">Équipe</a>
                <a href="#" class="block text-rose-800 lg:inline-block lg:mt-0 hover:text-rose-500 mr-5">Classement</a>
                <a href="#" class="block text-rose-800 lg:inline-block lg:mt-0 hover:text-rose-500 mr-5">Résultat</a>
                <a href="#" class="block text-rose-800 lg:inline-block lg:mt-0 hover:text-rose-500 mr-5">Calendrier</a>
                <a href="#" class="block text-rose-800 lg:inline-block lg:mt-0 hover:text-rose-500">Contact</a>
            </div>
            <div>
                <a href="/views/connexion.php" class="block text-rose-100 inline-block mt-0 hover:text-white bg-rose-800 hover:bg-rose-700 px-5 py-2 rounded-full mx-5">Se connecter</a>
            </div>
            <div>
                <a href="/views/inscription.php" class="block text-rose-100 inline-block mt-0 hover:text-white bg-rose-800 hover:bg-rose-700 px-5 py-2 rounded-full">S'inscrire</a>
            </div>
        </div>
    </nav>