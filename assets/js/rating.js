$(document).ready(function () {

    // Etoile rating
    
    // console.log($("#hidden-crud").data("crud"));
    if (($("#hidden-crud").data("crud") == 'create') || ($("#hidden-crud").data("crud") == 'update'))
        initNotesEtoiles();
});

function initNotesEtoiles() { //Associe le callback aux étoiles des compétences
    $(".star").on('click', function (event) {
        event.preventDefault();
        $(this).siblings().removeClass("selected-star"); //On retire la classe étoile sélectionnée
        $(this).addClass("selected-star");  //Et on l'attribue à l'étoile qui vient d'être cliquée
        $("#hidden-crud").val($(this).data("note"));
        console.log($("#hidden-crud").val());
    });
}