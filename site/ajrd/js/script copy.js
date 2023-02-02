// ====================================== Joueur modal ===========================================

const Open = document.getElementById("burger");
const Close = document.getElementById("fermer");
const SideMenu = document.getElementById("sidemenu");

if (Open) {
    Open.addEventListener("click", () => {
        SideMenu.classList.remove("invisible")
    })
}

// Fermer le menu
if (Close) {
    Close.addEventListener("click", () => {
        SideMenu.classList.add("invisible")
    })
}


// Modal
function toggleModal(modalID) {
    document.getElementById(modalID).classList.toggle("hidden");
    document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
    document.getElementById(modalID).classList.toggle("flex");
    document.getElementById(modalID + "-backdrop").classList.toggle("flex");
}

// ====================================== Swiper ===========================================
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