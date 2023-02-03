<?php
include dirname(__FILE__)."/templates/header.php";
   
    include "../utils/db.php";
    // $id = $_GET["id"];
    $db = connexionBase();
    $requete = $db->query("SELECT * FROM joueurs ORDER BY id");
    $tab = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();


?>

<body style="background-color:#ffe4e6;">

    <!-- Gardiens -->
    <section class="text-rose-800 border-b-2 border-rose-300">
        
        <div class="text-3xl font-bold flex justify-center mb-10 mt-10">Gardiens</div>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper text-rose-800">
                <?php foreach ($tab as $player):?>
                    <?php if($player->joueurs_type==4):?>
                            <div class="swiper-slide">
                            <a href="joueur_detail.php?id=<?= $player->id ?>">
                            <input type="hidden" value="<?=$player->id?>">
                                    <img src="/../asset/img/<?= $player->img_joueur ?>" alt="<?= $player->img_joueur ?>" class="h-96 ml-20 rounded-lg flex items-center ">
                            </a>
                            <div class="text-2xl font-semibold mt-4 flex justify-center mb-4">
                                <?= $player->nom ?>  <?= $player->prenom ?>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <!-- <div class="swiper-pagination mt-10"></div> -->
            <!-- // If we need navigation buttons  -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>

    <!-- Attaquants -->
    <section class="text-rose-800 border-b-2 border-rose-300">
        
        <div class="text-3xl font-bold flex justify-center mb-10 mt-10">Attaquants</div>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper text-rose-800">
                <?php foreach ($tab as $player):?>
                    <?php if($player->joueurs_type==1):?>
                            <div class="swiper-slide">
                            <a href="/views/joueur_detail.php?id=<?=$player->id ?>">
                                    <img src="/../asset/img/<?= $player->img_joueur ?>" alt="<?= $player->img_joueur ?>" class="h-96 ml-20 rounded-lg">
                            </a>
                            <div class="text-2xl font-semibold mt-4 flex justify-center mb-4">
                                <?= $player->nom ?>  <?= $player->prenom ?>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
            <!-- // If we need navigation buttons  -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>


    <!-- Défenseurs -->
    <section class="text-rose-800 border-b-2 border-rose-300">
        
        <div class="text-3xl font-bold flex justify-center mb-10 mt-10">Défenseurs</div>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper text-rose-800">
                <?php foreach ($tab as $player):?>
                    <?php if($player->joueurs_type==2):?>
                            <div class="swiper-slide">
                            <a href="joueur_detail.php?id=<?= $player->id ?>">
                                    <img src="/../asset/img/<?= $player->img_joueur ?>" alt="<?= $player->img_joueur ?>" class="h-96 ml-20 rounded-lg">
                            </a>
                            <div class="text-2xl font-semibold mt-4 flex justify-center mb-4">
                                <?= $player->nom ?>  <?= $player->prenom ?>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
            <!-- // If we need navigation buttons  -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>

    <!-- Milieu -->
    <section class="text-rose-800 border-b-2 border-rose-300">
        
        <div class="text-3xl font-bold flex justify-center mb-10 mt-10">Milieu</div>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper text-rose-800">
                <?php foreach ($tab as $player):?>
                    <?php if($player->joueurs_type==3):?>
                            <div class="swiper-slide">
                            <a href="joueur_detail.php?id=<?= $player->id ?>">
                                    <img src="/../asset/img/<?= $player->img_joueur ?>" alt="<?= $player->img_joueur ?>" class="h-96 ml-20 rounded-lg">
                            </a>
                            <div class="text-2xl font-semibold mt-4 flex justify-center mb-4">
                                <?= $player->nom ?>  <?= $player->prenom ?>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
            <!-- // If we need navigation buttons  -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>
    
    <!-- Modal hidden -->
    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 justify-center items-center" id="modal-id">
        <div class="relative w-auto my-6 mx-auto"> <!-- max-w-3xl pour limiter la largeur -->
            
        <!--Contenu-->
        <?php foreach ($modal as $m_player): var_dump($m_player->nom);?>
        <?php if($m_player->joueurs_type!=5 && $m_player->id = $player->id):?>

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
                    </button>
                </div>
            </div>
        </div>
    </div>


    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>



<script src="/../site/assets/js/script.js"></script>
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


<?php
include dirname(__FILE__)."/templates/footer.php";
?>