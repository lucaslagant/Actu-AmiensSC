<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipe</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='slide.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

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
                <button onclick="toggleModal('modal-id')">
                    <img src="https://lempreintedigitale.com/wp-content/uploads/2022/03/clubs-foot-europeens-plus-suivis-reseaux-sociaux-min.jpeg" alt="joueur random" class="h-96 rounded-lg">
                </button>
                <div class="text-2xl font-semibold mt-4 flex justify-center mb-4">
                    Antoine LEAUTEY
                </div>
            </div>
            <div class="mr-24">          
                <button onclick="toggleModal('modal-id')">
                    <img src="img/Ange_CHIBOZO.jpg" alt="joueur random" class="h-96 rounded-lg">
                </button>
                <div class="text-2xl font-semibold mt-4 flex justify-center mb-4">
                    Ange CHIBOZO
                </div>
            </div>
            <div class="mr-24">          
                <button onclick="toggleModal('modal-id')">
                    <img src="img/Jeremy_GELIN.jpg" alt="joueur random" class="h-96 rounded-lg">
                </button>
                <div class="text-2xl font-semibold mt-4 flex justify-center mb-4">
                    Jeremy GELIN
                </div>
            </div>
            <div class="mr-24">          
                <button onclick="toggleModal('modal-id')">
                    <img src="https://lempreintedigitale.com/wp-content/uploads/2022/03/clubs-foot-europeens-plus-suivis-reseaux-sociaux-min.jpeg" alt="joueur random" class="h-96 rounded-lg">
                </button>
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
                <button onclick="toggleModal('modal-id')">
                    <img src="https://lempreintedigitale.com/wp-content/uploads/2022/03/clubs-foot-europeens-plus-suivis-reseaux-sociaux-min.jpeg" alt="joueur random" class="h-96 rounded-lg">
                </button>
                <div class="text-2xl font-semibold mt-4 flex justify-center mb-4">
                    Antoine LEAUTEY
                </div>
            </div>
            <div class="mr-24">          
                <button onclick="toggleModal('modal-id')">
                    <img src="img/Ange_CHIBOZO.jpg" alt="joueur random" class="h-96 rounded-lg">
                </button>
                <div class="text-2xl font-semibold mt-4 flex justify-center mb-4">
                    Ange CHIBOZO
                </div>
            </div>
            <div class="mr-24">          
                <button onclick="toggleModal('modal-id')">
                    <img src="img/Jeremy_GELIN.jpg" alt="joueur random" class="h-96 rounded-lg">
                </button>
                <div class="text-2xl font-semibold mt-4 flex justify-center mb-4">
                    Jeremy GELIN
                </div>
            </div>
            <div class="mr-24">          
                <button onclick="toggleModal('modal-id')">
                    <img src="https://lempreintedigitale.com/wp-content/uploads/2022/03/clubs-foot-europeens-plus-suivis-reseaux-sociaux-min.jpeg" alt="joueur random" class="h-96 rounded-lg">
                </button>
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
                <button onclick="toggleModal('modal-id')">
                    <img src="https://lempreintedigitale.com/wp-content/uploads/2022/03/clubs-foot-europeens-plus-suivis-reseaux-sociaux-min.jpeg" alt="joueur random" class="h-96 rounded-lg">
                </button>
                <div class="text-2xl font-semibold mt-4 flex justify-center mb-4">
                    Antoine LEAUTEY
                </div>
            </div>
            <div class="mr-24">          
                <button onclick="toggleModal('modal-id')">
                    <img src="img/Ange_CHIBOZO.jpg" alt="joueur random" class="h-96 rounded-lg">
                </button>
                <div class="text-2xl font-semibold mt-4 flex justify-center mb-4">
                    Ange CHIBOZO
                </div>
            </div>
            <div class="mr-24">          
                <button onclick="toggleModal('modal-id')">
                    <img src="img/Jeremy_GELIN.jpg" alt="joueur random" class="h-96 rounded-lg">
                </button>
                <div class="text-2xl font-semibold mt-4 flex justify-center mb-4">
                    Jeremy GELIN
                </div>
            </div>
            <div class="mr-24">          
                <button onclick="toggleModal('modal-id')">
                    <img src="https://lempreintedigitale.com/wp-content/uploads/2022/03/clubs-foot-europeens-plus-suivis-reseaux-sociaux-min.jpeg" alt="joueur random" class="h-96 rounded-lg">
                </button>
                <div class="text-2xl font-semibold mt-4 flex justify-center mb-4">
                    Antoine LEAUTEY
                </div>
            </div>
        </div>
    </section>


    <!-- Modal hidden -->
    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 justify-center items-center" id="modal-id">
        <div class="relative w-auto my-6 mx-auto"> <!-- max-w-3xl pour limiter la largeur -->
            <!--Contenu-->
            <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-rose-50">
                <!--Header-->
                <div class="flex items-start p-5 border-b border-solid border-rose-200 rounded-t">
                    <h3 class="text-3xl font-semibold">
                    Prénom NOM
                    </h3>
                </div>
                <!--Body-->
                <div class="relative p-6 flex-auto flex flex-row">

                    <div class="relative">
                        <ul class="mr-4 text-lg">
                            <li class="bg-red-200 border-2 border-red-800 mb-4 p-2 py-4">
                                Match(s) joué(s) :
                                <div class="flex justify-center py-4 border-t-2 border-red-800">
                                    85
                                </div>
                            </li>
                            <li class="bg-red-200 border-2 border-red-800 mb-4 p-2 py-4">
                                But(s) marqué(s) :
                                <div class="flex justify-center py-4 border-t-2 border-red-800">
                                    85
                                </div>
                            </li>
                            <li class="bg-red-200 border-2 border-red-800 p-2">
                                Minute(s) jouée(s) :
                                <div class="flex justify-center py-4 border-t-2 border-red-800">
                                    85
                                </div>
                            </li>
                        </ul>
                    </div>

                    <img src="https://lempreintedigitale.com/wp-content/uploads/2022/03/clubs-foot-europeens-plus-suivis-reseaux-sociaux-min.jpeg" alt="Image du joueur choisi" class="h-96">

                    <div class="relative">
                        <ul class="ml-4 text-lg">
                            <li class="bg-red-200 border-2 border-red-800 mb-4 p-2">
                                Carton(s) jaune(s) <br>
                                et/ou rouge(s) :
                                <div class="flex justify-center py-4 border-t-2 border-red-800">
                                    0
                                </div>
                            </li>
                            <li class="bg-red-200 border-2 border-red-800 mb-4 p-2">
                                Tir(s) cadré(s) :
                                <div class="flex justify-center py-4 border-t-2 border-red-800">
                                    85
                                </div>
                            </li>
                            <li class="bg-red-200 border-2 border-red-800 p-2">
                                Passe(s) :
                                <div class="flex justify-center py-4 border-t-2 border-red-800">
                                    85
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
                <!--Footer-->
                <div class="flex items-center justify-end p-6 border-t border-solid border-rose-200 rounded-b">
                    <button class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-xl outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-id')">
                    <i class='bx bx-x text-lg'></i>Fermer                
                    </button>
                </div>
            </div>
        </div>
    </div>
      <!-- Modal hidden -->
      <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 justify-center items-center" id="modal-id">
        <div class="relative w-auto my-6 mx-auto"> <!-- max-w-3xl pour limiter la largeur -->
            
        <!--Contenu-->
        <?php foreach ($modal as $m_player):var_dump($m_player);?>
        <?php if($m_player->joueurs_type!=5):?>

            <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-rose-50">
                    <!--Header-->
                    <div class="flex items-start p-5 border-b border-solid border-rose-200 rounded-t">
                        <h3 class="text-3xl font-semibold">
                        <?= $m_player->nom ?>  <?= $m_player->prenom ?>
                        </h3>
                    </div>
                    <div class="flex items-start p-5 border-b border-solid border-rose-200 rounded-t">
                        (<?= $m_player->age ?>)  <?= $m_player->date_anniversaire ?>
                    </div>
                    <!--Body-->
                    <div class="relative p-6 flex-auto flex flex-row">

                        <div class="relative">
                            <ul class="mr-4 text-lg">
                                <li class="bg-red-200 border-2 border-red-800 mb-4 p-2 py-4">
                                    Match(s) joué(s) :
                                    <div class="flex justify-center py-4 border-t-2 border-red-800">
                                        <?= $m_player->matchs_joues ?>
                                    </div>
                                </li>
                                <li class="bg-red-200 border-2 border-red-800 mb-4 p-2 py-4">
                                    But(s) marqué(s) :
                                    <div class="flex justify-center py-4 border-t-2 border-red-800">
                                        <?= $m_player->buts_marques ?>
                                    </div>
                                </li>
                                <li class="bg-red-200 border-2 border-red-800 p-2">
                                    Minute(s) jouée(s) :
                                    <div class="flex justify-center py-4 border-t-2 border-red-800">
                                        <?= $m_player->temps_de_jeu ?>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <img src="/../site/img/<?= $m_player->img_joueur ?>" alt="Image du joueur choisi" class="h-96">

                        <div class="relative">
                            <ul class="ml-4 text-lg">
                                <li class="bg-red-200 border-2 border-red-800 mb-4 p-2">
                                    Carton(s) jaune(s) <br>
                                    et/ou rouge(s) :
                                    <div class="flex justify-center py-4 border-t-2 border-red-800">
                                        <?= $m_player->cartons_jaunes ?> - <?= $m_player->cartons_rouges ?>
                                    </div>
                                </li>
                                <li class="bg-red-200 border-2 border-red-800 mb-4 p-2">
                                    But(s) :
                                    <div class="flex justify-center py-4 border-t-2 border-red-800">
                                        <?= $m_player->buts_marques?>
                                    </div>
                                </li>
                                <li class="bg-red-200 border-2 border-red-800 p-2">
                                    Passe(s) decisive(s) :
                                    <div class="flex justify-center py-4 border-t-2 border-red-800">
                                        <?= $m_player->passes_decisives ?>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                <?php endif;?>
                <?php  endforeach;?>     
                <!--Footer-->
                <div class="flex items-center justify-end p-6 border-t border-solid border-rose-200 rounded-b">
                    <button class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-xl outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-id')">
                    <i class='bx bx-x text-lg'></i>Fermer                
                    
                </div>
            </div>
        </div>
    </div>


    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>

    <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper text-rose-800">
            <div class="swiper-slide">
                <button onclick="toggleModal('modal-id')">
                    <img src="https://lempreintedigitale.com/wp-content/uploads/2022/03/clubs-foot-europeens-plus-suivis-reseaux-sociaux-min.jpeg" alt="joueur random" class="h-96 rounded-lg">
                </button>
                <div class="text-2xl font-semibold mt-4 flex justify-center mb-4">
                    Antoine LEAUTEY
                </div>
            </div>
            <div class="swiper-slide">
                <button onclick="toggleModal('modal-id')">
                    <img src="https://lempreintedigitale.com/wp-content/uploads/2022/03/clubs-foot-europeens-plus-suivis-reseaux-sociaux-min.jpeg" alt="joueur random" class="h-96 rounded-lg">
                </button>
                <div class="text-2xl font-semibold mt-4 flex justify-center mb-4">
                    Antoine LEAUTEY
                </div>
            </div>
            <div class="swiper-slide">
                <button onclick="toggleModal('modal-id')">
                    <img src="img/Antoine_LEAUTEY.jpg" alt="joueur random" class="h-96 rounded-lg">
                </button>
                <div class="text-2xl font-semibold mt-4 flex justify-center mb-4">
                    Antoine LEAUTEY
                </div>
            </div>            
            <div class="swiper-slide">
                <button onclick="toggleModal('modal-id')">
                    <img src="https://lempreintedigitale.com/wp-content/uploads/2022/03/clubs-foot-europeens-plus-suivis-reseaux-sociaux-min.jpeg" alt="joueur random" class="h-96 rounded-lg">
                </button>
                <div class="text-2xl font-semibold mt-4 flex justify-center mb-4">
                    Antoine LEAUTEY
                </div>
            </div>            
            <div class="swiper-slide">
                <button onclick="toggleModal('modal-id')">
                    <img src="img/Antoine_LEAUTEY.jpg" alt="joueur random" class="h-96 rounded-lg">
                </button>
                <div class="text-2xl font-semibold mt-4 flex justify-center mb-4">
                    Antoine LEAUTEY
                </div>
            </div>            
            <div class="swiper-slide">
                <button onclick="toggleModal('modal-id')">
                    <img src="https://lempreintedigitale.com/wp-content/uploads/2022/03/clubs-foot-europeens-plus-suivis-reseaux-sociaux-min.jpeg" alt="joueur random" class="h-96 rounded-lg">
                </button>
                <div class="text-2xl font-semibold mt-4 flex justify-center mb-4">
                    Antoine LEAUTEY
                </div>
            </div>            
            <div class="swiper-slide">
                <button onclick="toggleModal('modal-id')">
                    <img src="img/Antoine_LEAUTEY.jpg" alt="joueur random" class="h-96 rounded-lg">
                </button>
                <div class="text-2xl font-semibold mt-4 flex justify-center mb-4">
                    Antoine LEAUTEY
                </div>
            </div>            
            <div class="swiper-slide">
                <button onclick="toggleModal('modal-id')">
                    <img src="https://lempreintedigitale.com/wp-content/uploads/2022/03/clubs-foot-europeens-plus-suivis-reseaux-sociaux-min.jpeg" alt="joueur random" class="h-96 rounded-lg">
                </button>
                <div class="text-2xl font-semibold mt-4 flex justify-center mb-4">
                    Antoine LEAUTEY
                </div>
            </div>            
            <div class="swiper-slide">
                <button onclick="toggleModal('modal-id')">
                    <img src="img/Antoine_LEAUTEY.jpg" alt="joueur random" class="h-96 rounded-lg">
                </button>
                <div class="text-2xl font-semibold mt-4 flex justify-center mb-4">
                    Antoine LEAUTEY
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <!-- // If we need navigation buttons  -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>



    <!-- Footer -->
    <?php include('Footer.php'); ?>

<script src="assets/js/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.6/swiper-bundle.min.js" integrity="sha512-s/ili339Sh6gM9omfUC6fRwZPU6MPcGJxvDqlbBzPcFcD649iqeO96YQr3VKj/jZSMd2/T9Qr2mp2w4DyCIOPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>



<script>
    const swiper = new Swiper('.swiper', {
        slidesPerView: 3,
        speed:400,
        spaceBetween:100,
        // autoplay:{
        //     delay:3000,
        // },
  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});
</script>


</body>

</html>