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

    <!-- Attaquants -->
    <section class="text-rose-800 border-b-2 border-rose-300">
        <div class="text-3xl font-bold flex justify-center mt-10">Attaquants</div>
        <!-- Flex wrap pour que les divs aillent à la ligne -->
        <div class="flex flex-row flex-wrap justify-center m-8">
            <div class="mr-24">
                <a href="#">
                    <img src="img/Antoine_LEAUTEY.jpg" alt="joueur random" class="h-96 rounded-lg">
                </a>
                <div class="text-2xl font-semibold mt-4 flex justify-center mb-4">
                    Antoine LEAUTEY
                </div>
            </div>
            <div class="mr-24">          
                <a href="#">
                    <img src="img/Ange_CHIBOZO.jpg" alt="joueur random" class="h-96 rounded-lg">
                </a>
                <div class="text-2xl font-semibold mt-4 flex justify-center mb-4">
                    Ange CHIBOZO
                </div>
            </div>
            <div class="mr-24">          
                <a href="#">
                    <img src="img/Jeremy_GELIN.jpg" alt="joueur random" class="h-96 rounded-lg">
                </a>
                <div class="text-2xl font-semibold mt-4 flex justify-center mb-4">
                    Jeremy GELIN
                </div>
            </div>
            <div class="mr-24">          
                <a href="#">
                    <img src="img/Antoine_LEAUTEY.jpg" alt="joueur random" class="h-96 rounded-lg">
                </a>
                <div class="text-2xl font-semibold mt-4 flex justify-center mb-4">
                    Antoine LEAUTEY
                </div>
            </div>
        </div>
    </section>

    <!-- Défenseurs -->
    <section class="text-rose-800 border-b-2 border-rose-300">
        <div class="text-3xl font-bold flex justify-center mt-10">Défenseurs</div>
        <!-- Flex wrap pour que les divs aillent à la ligne -->
        <div class="flex flex-row flex-wrap justify-center m-8">
            <div class="mr-24">
                <a href="#">
                    <img src="img/Antoine_LEAUTEY.jpg" alt="joueur random" class="h-96 rounded-lg">
                </a>
                <div class="text-2xl font-semibold mt-4 flex justify-center mb-4">
                    Antoine LEAUTEY
                </div>
            </div>
            <div class="mr-24">          
                <a href="#">
                    <img src="img/Ange_CHIBOZO.jpg" alt="joueur random" class="h-96 rounded-lg">
                </a>
                <div class="text-2xl font-semibold mt-4 flex justify-center mb-4">
                    Ange CHIBOZO
                </div>
            </div>
            <div class="mr-24">          
                <a href="#">
                    <img src="img/Jeremy_GELIN.jpg" alt="joueur random" class="h-96 rounded-lg">
                </a>
                <div class="text-2xl font-semibold mt-4 flex justify-center mb-4">
                    Jeremy GELIN
                </div>
            </div>
            <div class="mr-24">          
                <a href="#">
                    <img src="img/Antoine_LEAUTEY.jpg" alt="joueur random" class="h-96 rounded-lg">
                </a>
                <div class="text-2xl font-semibold mt-4 flex justify-center mb-4">
                    Antoine LEAUTEY
                </div>
            </div>
        </div>
    </section>

    <!-- Gardiens -->
    <section class="text-rose-800">
        <div class="text-3xl font-bold flex justify-center mt-10">Gardiens</div>
        <!-- Flex wrap pour que les divs aillent à la ligne -->
        <div class="flex flex-row flex-wrap justify-center m-8">
            <div class="mr-24">
                <a href="#">
                    <img src="img/Antoine_LEAUTEY.jpg" alt="joueur random" class="h-96 rounded-lg">
                </a>
                <div class="text-2xl font-semibold mt-4 flex justify-center mb-4">
                    Antoine LEAUTEY
                </div>
            </div>
            <div class="mr-24">          
                <a href="#">
                    <img src="img/Ange_CHIBOZO.jpg" alt="joueur random" class="h-96 rounded-lg">
                </a>
                <div class="text-2xl font-semibold mt-4 flex justify-center mb-4">
                    Ange CHIBOZO
                </div>
            </div>
            <div class="mr-24">          
                <a href="#">
                    <img src="img/Jeremy_GELIN.jpg" alt="joueur random" class="h-96 rounded-lg">
                </a>
                <div class="text-2xl font-semibold mt-4 flex justify-center mb-4">
                    Jeremy GELIN
                </div>
            </div>
            <div class="mr-24">          
                <a href="#">
                    <img src="img/Antoine_LEAUTEY.jpg" alt="joueur random" class="h-96 rounded-lg">
                </a>
                <div class="text-2xl font-semibold mt-4 flex justify-center mb-4">
                    Antoine LEAUTEY
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