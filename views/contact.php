<?php
    include "../utils/db.php";
    $db = connexionBase();

    $requete = $db->query("SELECT * FROM classement ORDER BY num ASC");
    $tab = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();
    include dirname(__FILE__)."/templates/header.php";

?>

    <section class="text-rose-800">
        <div class="flex justify-center my-6">
            <div class="flex flex-row bg-red-200 p-14 m-10 rounded-xl">
                <div class="flex flex-col">
                    <div class="text-2xl font-semibold border-b-2 border-rose-800 h-14 mb-8 uppercase">Informations contact</div>
                    <div class="text-xl rounded-lg mb-12 p-4 hover:border-2 border-rose-400 hover:bg-rose-50 hover:text-rose-600"><i class='bx bx-phone' ></i><span class="ml-4"> +336 12 34 56 78</span></div>
                    <div class="text-xl rounded-lg mb-12 p-4 hover:border-2 border-rose-400 hover:bg-rose-50 hover:text-rose-600"><i class='bx bx-envelope' ></i><span class="ml-4"> email@gmail.fr</span></div>
                    <div class="text-xl rounded-lg mb-12 p-4 hover:border-2 border-rose-400 hover:bg-rose-50 hover:text-rose-600"><i class='bx bx-location-plus' ></i><span class="ml-4"> 384 rue AFPA</span></div>
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
<?php
include dirname(__FILE__)."/templates/footer.php";
?>


