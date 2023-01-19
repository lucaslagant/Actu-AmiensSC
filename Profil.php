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
            <div id="sidemenu" class="invisible"><?php include('Page_Navbar.php'); ?></div>
        </div>
    </nav>


    <section class="text-rose-800">

        <div class="flex justify-center p-10">
            <div>
                <img src="img/user.png" alt="User par défaut" class="rounded-full">
            </div>
            <div>
                <div>
                    Nom d'utilisateur :
                    <span>nomdu80</span>
                </div>
                <div>
                    Adresse mail :
                    <span>nomdu80@gmail.com</span>
                </div>
                <div>
                    Téléphone :
                    <span>06 42 24 24 42</span>
                </div>
            </div>
        </div>

    </section>




    <!-- Footer -->
    <?php include('Footer.php'); ?>


<script src="script.js"></script>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>

</html>