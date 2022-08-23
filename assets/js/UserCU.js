$(document).ready(function () {

// Au chargement de la page
    if ($("#role").val() == 'delegue') {
        $(".promotion-cell").hide();
    }
    else {
        $(".promotion-cell").show();
    }
// Au changement de la val du dropdown
    $("#role").change(function () {

        if ($(this).val() == 'delegue') {
            $(".promotion-cell").hide();
        }
        else {
            $(".promotion-cell").show();
        }
    });

});