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