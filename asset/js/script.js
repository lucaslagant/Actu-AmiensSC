// ====================================== Sweet Alert 2 ===========================================
// jQUERY
$(document).ready(function() {
    let del = $('a.delete');
    $(del).each(function(){
        $(this).on('click', function(e){
            // empeche de suivre le comportement du navigateur par defaut c'est a dire le lien
            e.preventDefault();

            // Juste une question de porté de variable, on le réutilisera plus tard dans le script 
            let link = $(this);
            let target = $(this).attr('href');

            Swal.fire({
                icon: 'warning',
                title: 'Êtes-vous sûr de vouloir supprimé cet utilisateur ?',
                text:'Cette action est irréversible',
                showCancelButton: true,
                confirmButtonText: 'Oui',
                cancelButtonText: 'Non',
            }).then((result) => {
                if (result.value) {
                    fetch(target, {method: 'get'}).then(response => response.json()).then(message => {
                        console.log(message);
                        Swal.fire({
                            icon: 'success',
                            title: 'Supprimé !',
                            type: 'success',
                        });
                    });
                    // Supprimez du code HTML avec jQuery
                    $(link).closest('tr').fadeOut();

                }
                // Attraper une erreur 
            }).catch(err => {
                console.log(err);
                Swal.fire({
                    icon: 'error',
                    title: 'Oups!',
                    text: 'Une erreur est survenue.',
                    type: 'error',
                });
            });
        });
    });
});


// Modal
function toggleModal(modalID) {
    document.getElementById(modalID).classList.toggle("hidden");
    document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
    document.getElementById(modalID).classList.toggle("flex");
    document.getElementById(modalID + "-backdrop").classList.toggle("flex");
}


// Script des swipers
const swiper = new Swiper('.swiper', {
    slidesPerView: 3,
    speed: 400,
    spaceBetween: 100,
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
// const Open = document.getElementById("burger");
// const Close = document.getElementById("fermer");
// const SideMenu = document.getElementById("sidemenu");

// // Ouvrir le menu
// if (Open) {
//     Open.addEventListener("click", () => {
//         SideMenu.classList.remove("invisible")
//     })
// }

// // Fermer le menu
// if (Close) {
//     Close.addEventListener("click", () => {
//         SideMenu.classList.add("invisible")
//     })
// }


// ====================================== Transfert ===========================================

const btn = document.querySelector('.btn');

btn.addEventListener('click', () => {

    window.scrollTo({
        top: 0,
        left: 0,
        behavior: "smooth"
    })
    
})