<?php
include '/home/stagiaire/Documents/Actu-AmiensSC/utils/db.php';
$db = ConnexionBase();
include dirname(__FILE__)."/views/templates/header.php";
?>
    <!-- Section d'accès aux joueurs -->
    <section class="bg-rose-100">
        <br><br><br>

        <div class="flex flex-col items-center">

            <div class="flex justify-center">
                <!-- Cliquer pour aller à la page de joueurs -->
                <img src="/asset/img/Amiens-min.png" alt="Image de test" class="w-74">
                <!-- "transition duration-500 ease-in-out" à revoir -->
            </div>

            <!-- Rendre cliquable aussi ? -->
            <div class="text-4xl mt-20">
                <a href="/views/equipe.php"><span class="text-rose-800 font-bold hover:underline underline-offset-8">Voir le club</span></a>
            </div>

        </div>

        <br><br><br>
    </section>
     <!-- Section accès résultats/classement/calendrier -->
     <section class="bg-rose-100">
        <br><br><br><br>

        <div class="flex justify-center">
            <!-- Card classement des ékip -->
            <div class="px-4"> <!-- Classe originale : "container mx-auto" -->
                <div class="py-8">
                    <div class="mx-4 px-4 py-4 overflow-x-auto">
                        <div class="inline-block shadow-lg rounded-lg overflow-hidden">
                            <table class="min-w-full leading-normal">
                                <thead>
                                    <tr>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            #
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Équipe
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Match(s)
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Pts.
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">1</p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 w-10 h-10">
                                                    <img class="w-full h-full rounded-full" src="/asset/img/Le_Havre-min.png" alt="Le_Havre-min.png">
                                                </div>
                                                <div class="ml-3">
                                                    <p class="text-gray-900 whitespace-no-wrap">
                                                        Le Havre
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap text-center">21</p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap text-center">
                                                46
                                            </p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">2</p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 w-10 h-10">
                                                    <img class="w-full h-full rounded-full" src="/asset/img/Sochaux-min.png" alt="Sochaux-min.png">
                                                </div>
                                                <div class="ml-3">
                                                    <p class="text-gray-900 whitespace-no-wrap">
                                                         Sochaux
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap text-center">21</p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap text-center">
                                                36
                                            </p>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class=" flex justify-center">
                            <a href="/views/classement.php"
                            class="block text-rose-100 inline-block hover:text-white bg-rose-800 hover:bg-rose-700 px-5 py-2 mt-3  items-center self-auto rounded-full">Classement</a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Card des matchs passés -->
                <div class="mx-4 px-4 py-4 overflow-x-auto">
                    <div class="flex flex-col md:flex-row md:max-w-xl rounded-lg bg-white shadow-lg p-12">

                        <div class="flex lg:flex-col md:flex-col sm:flex-row">
                            <!-- Col pour superposer les images en lg et md, row pour aligner en sm -->
                            <img class="w-24 md:h-auto object-cover" src="/asset/img/Niort-min.png" alt="EquipeUne" />
                            <img class="w-24 md:h-auto object-cover" src="/asset/img/Amiens-min.png" alt="EquipeDeux" />
                        </div>

                        <div class="p-6 flex flex-col justify-start border-r-2">
                            <span class="text-gray-700 text-base mb-14">Niort<br></span>
                            <span class="text-gray-700 text-base mb-10">Amiens SC</span>

                            <p class="text-gray-600 text-xs flex justify-end">Terminé : 31/01</p>
                        </div>

                        <div class="p-6 flex flex-col">
                            <span class="text-gray-700 text-base ml-4 mb-14">1<br></span>
                            <span class="text-gray-700 text-base ml-4">3</span>
                        </div>
                        

                    </div>
                    <div class=" flex justify-center">
                                <a href="/views/resultat.php"
                                class="block text-rose-100 inline-block hover:text-white bg-rose-800 hover:bg-rose-700 px-5 py-2 mt-3  items-center self-auto rounded-full"> Résultats</a>
                    </div>
                </div>
          

            <!-- Card des matchs à venir -->
            <div class="mx-4 px-4 py-4 overflow-x-auto">
                <div class="flex flex-col rounded-lg bg-white shadow-lg p-6 ml-12">
                    <span class="text-gray-700 text-base mb-6">Match à venir : </span>


                    <div class="flex flex-row justify-between px-2">
                        <img class="w-24" src="/asset/img/Metz-min.png" alt="Metz-min.png">
                        <span class="text-gray-700 text-base mt-6">21:00<br></span>
                        <img class="w-24" src="/asset/img/Amiens-min.png" alt="Amiens-min.png">
                    </div>

                    <div class="p-6 flex flex-row justify-between">
                        <span class="text-gray-700 text-base pr-10">Metz<br></span>
                        <span class="text-gray-700 text-base">Amiens SC</span>
                    </div>
                </div>
                <div class=" flex justify-center">
                        <a href="/views/matchAvenir.php"
                            class="block text-rose-100 inline-block hover:text-white bg-rose-800 hover:bg-rose-700 px-5 py-2 mt-3  items-center self-auto rounded-full">Match à venir
                        </a>
                </div>
            </div>
        </div>
        <br><br><br><br>
    </section>

<?php
include dirname(__FILE__)."/views/templates/footer.php";
?>