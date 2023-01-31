// ====================================== Joueur modal ===========================================

// var modal = document.getElementById("modal-joueur1");
// var btn = document.getElementById("player1");
// var close = document.getElementsByClassName("close")[0];

// btn.onclick = function() {
//     modal.style.display = "block";
// }

// close.onclick = function() {
//     modal.style.display = "none";
// }

// window.onclick = function(event) {
//     if (event.target == modal) {
//         modal.style.display = "none";
//     }
// }

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