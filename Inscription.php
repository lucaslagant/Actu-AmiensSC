<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'inscrire</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='style.css' rel='stylesheet'>
</head>

<body style="background-color:#ffe4e6;">


    <!-- Pour rétrécir la page un peu (ajouter /div en bas) -->
    <!-- <div class="w-full px-64 mx-auto"> -->


    <!-- Navbar en burger, s'ouvre OnClick -->
    <nav class="flex items-center justify-between flex-wrap bg-rose-200 p-10">
        <div class="flex items-center flex-shrink-0 text-rose-800 mr-6">
            <a href="Index.php"><span class="font-bold text-xl tracking-tight">Logo</span></a>
        </div>

        <div class="lg:flex lg:items-center lg:w-auto">
            <div>
                <button class="block text-xl text-rose-100 inline-block mt-0 hover:text-white bg-rose-800 hover:bg-rose-700 px-5 py-2 rounded-full" id="burger"><i class='bx bx-menu'></i></button>
            </div>
            <div id="sidemenu" class="invisible"><?php include('Page_Navbar.html'); ?></div>
        </div>
    </nav>

    <section class="bg-rose-50">

        <div class="">
            <div class="flex justify-center text-rose-800 pt-10 pb-10">
                <div class="inline-block shadow-lg bg-rose-100 p-8 px-32 m-4">
                <form action="">
                    <span class="text-3xl">Créer un compte</span>
                    <br><br><br>

                    <div class="flex flex-col">
                    <label for="nom">Nom : </label>
                    <input type="text" id="nom" class="rounded border-rose-300 border-2">
                    <br><br>

                    <label for="nom">Prénom : </label>
                    <input type="text" id="nom" class="rounded border-rose-300 border-2">
                    <br><br>

                    <label for="nom">Email : </label>
                    <input type="text" id="nom" class="rounded border-rose-300 border-2">
                    <br><br>

                    <label for="nom">Mot de passe : </label>
                    <input type="text" id="nom" class="rounded border-rose-300 border-2">
                    <br><br>

                    <label for="nom">Réécrivez le mot de passe : </label>
                    <input type="text" id="nom" class="rounded border-rose-300 border-2">
                    <br><br>
                    </div>

                    <div class="flex justify-center">
                    <input type="submit" value="Créer" class="px-12 block text-rose-50 inline-block mt-0 hover:text-white bg-rose-800 hover:bg-rose-600 px-5 py-2 rounded-full">
                    <a href="Connexion.php" class="ml-6 block text-rose-800 inline-block mt-0 hover:text-rose-800 bg-rose-300 hover:bg-white px-5 py-2 rounded-full">Se connecter</a>
                    </div>
                </form>
                </div>
            </div>
        </div>

    </section>


    <!-- Footer -->
    <?php include('Footer.html'); ?>


<script src="script.js"></script>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>

</html>