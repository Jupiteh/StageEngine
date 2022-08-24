$(document).ready(function () {

    // Lance le loader si tous les champs sont remplis
    $("#send-mail").click(function () {
        if ($("#subject").val() && $("#message").val() && $("#cv").val() && $("#lettre").val()) {
            $("#loader").show();
        }
    });
});