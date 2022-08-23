$(document).ready(function () {


    // Bouton hide le menu
    $("#btn-switch1").click(function () {
        $("#tab-links").hide();
        $("#btn-switch1").hide();
        $("#btn-switch2").show();
        //IF DESKTOP
        if (window.matchMedia("(min-width:800px)").matches) {
            $(".tabcontent").css('width', '100%');
        }
    })

    // Bouton show le menu
    $("#btn-switch2").click(function () {
        $("#tab-links").show();
        $("#btn-switch2").hide();
        $("#btn-switch1").show();
        //IF DESKTOP
        if (window.matchMedia("(min-width:800px)").matches) {
            $(".tabcontent").css('width', '85%');
        }
    })


    // Affiche les types de user consultables
    $("#liste-user-all").hover(function () {
        $(".liste-user").show("slow");
    }, function () {
        $(".liste-user").delay(1500).hide("slow");
    });


});