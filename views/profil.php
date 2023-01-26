<!-- Voire TUTO 1h03:16 Youtube  -->
<?php
include dirname(__FILE__)."/templates/header.php";
?>
<section class="text-rose-800 p-16">

<div class="flex justify-center p-10">
    <div class="bg-red-200 flex flex-row p-14 rounded-lg">

        <div class="pt-10 pr-10">
            <img src="/asset/img/user.png" alt="User par défaut" class="rounded-full h-48">
        </div>

        <div class="text-lg tracking-wide bg-rose-50 rounded-lg">
            <div class="p-8">
                <span class="font-semibold">Nom d'utilisateur :</span>
                <span>nomdudfcgtvbujn</span>
            </div>
            <div class="p-8">
                <span class="font-semibold">Adresse mail :</span>
                <span>nomdu80@gmail.com</span>
            </div>
            <div class="p-8">
                <span class="font-semibold">Téléphone :</span>
                <span>06 42 24 24 42</span>
            </div>

            <div class="pb-10">
                <a href="Inscription.php" class="ml-6 block text-rose-800 inline-block mt-0 hover:text-rose-800 bg-rose-300 hover:bg-white px-5 py-2 rounded-full">Modifier</a>
                <a href="/controllers/deconnection.php" class="ml-6 block text-rose-50 inline-block mt-0 hover:text-rose-800 bg-rose-800 hover:bg-white px-5 py-2 rounded-full">Déconnexion</a>
            </div>
        </div>
    </div>
</div>

</section>

<?php
include dirname(__FILE__)."/templates/footer.php";
?>