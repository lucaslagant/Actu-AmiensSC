// ====================================== Joueur modal ===========================================

var modal = document.getElementById("modal-joueur1");
var btn = document.getElementById("player1");
var close = document.getElementsByClassName("close")[0];

btn.onclick = function() {
    modal.style.display = "block";
}

close.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// ====================================== Sweet Alert 2 ===========================================
// jQUERY
$(document).ready(function() {

    let del = $('a.delete');

    $(del).each(function() {
        
        let link = $(this);
        let target = $(this).attr('href');

        Swal.fire({
            icon: 'warning',
            title: 'Êtes-vous sûr de vouloir vous déconnecté ?',
            showCancelButton: true,
            confirmButtonText: 'Oui',
            cancelButtonText: 'Non',         
        }).then((result) => {
            if (result.value) {
                fetch(target, {method: 'get'}).then(response => response.json()).then(message => {
                    Swal.fire({
                        icon: 'success',
                        title: 'Déconnecté !',
                        type: 'success',
                    });
                });

            };
        });
    });
});