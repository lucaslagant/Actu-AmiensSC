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