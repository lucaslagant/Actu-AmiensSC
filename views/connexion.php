<?php
include dirname(__FILE__)."/templates/header.php";
?>
    <section class="bg-rose-50">

        <div class="py-20">
            <div class="flex justify-center text-rose-800 pt-10 pb-10">
                <div class="inline-block shadow-lg bg-rose-100 p-8 px-32 m-4">
                <form action="" method="post">
                    <span class="text-3xl flex justify-center">Se connecter</span>
                    <br><br>

                    <div class="flex flex-col">

                    <label for="nom">Email : </label>
                    <input type="text" id="nom" class="rounded border-rose-300 border-2">
                    <br><br>

                    <label for="nom">Mot de passe : </label>
                    <input type="text" id="nom" class="rounded border-rose-300 border-2">
                    <br><br>

                    </div>

                    <div class="flex justify-center">
                    <input type="submit" value="Connexion" class="block text-rose-50 inline-block mt-0 hover:text-white bg-rose-800 hover:bg-rose-600 px-5 py-2 rounded-full">
                    <a href="/views/inscription.php" class="ml-6 block text-rose-800 inline-block mt-0 hover:text-rose-800 bg-rose-300 hover:bg-white px-5 py-2 rounded-full">Je n'ai pas de compte</a>
                    </div>
                </form>
                </div>
            </div>
        </div>

    </section>
<?php
include dirname(__FILE__)."/templates/footer.php";
?>