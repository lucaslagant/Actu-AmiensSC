<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
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
        <div class="flex justify-center my-6">
            <div class="flex flex-row bg-red-200 p-14 m-10 rounded-xl">
                <div class="flex flex-col">
                    <div class="text-2xl font-semibold border-b-2 border-rose-800 h-14 mb-8 uppercase">Informations contact</div>
                    <div class="text-xl mb-12"><i class='bx bx-phone' ></i><span class="ml-4"> +336 12 34 56 78</span></div>
                    <div class="text-xl mb-12"><i class='bx bx-envelope' ></i><span class="ml-4"> email@gmail.fr</span></div>
                    <div class="text-xl mb-12"><i class='bx bx-location-plus' ></i><span class="ml-4"> 384 rue AFPA</span></div>
                </div>

                <div class="ml-12 text-xl bg-red-50 p-8 rounded-xl">
                    <form action="">
                        <label for="nomC">Nom :</label>
                        <input type="text" id="nomC" class="mt-2 mb-4 rounded border-rose-300 border-2 flex flex-col w-96">

                        <label for="emailC">Email :</label>
                        <input type="text" id="emailC" class="mt-2 mb-4 rounded border-rose-300 border-2 flex flex-col w-96">

                        <label for="messageC">Message :</label>
                        <textarea id="messageC" class="mt-2 mb-8 rounded border-rose-300 border-2 flex flex-col w-96 h-20"></textarea>

                        <input type="submit" value="Envoyer" class="px-12 block text-rose-50 inline-block mt-0 hover:text-white bg-rose-800 hover:bg-rose-600 py-2 rounded-full">
                    </form>
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