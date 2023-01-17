<?php
include dirname(__FILE__)."/templates/header.php";
?>
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
<?php
include dirname(__FILE__)."/templates/footer.php";
?>