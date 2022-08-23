$(document).ready(function () {

    $(".mail-form").hide();

    $("#apply").on("click", function () {
        $(".mail-form").show();
        $(".tab").css('height', '124%')
        $(".tabcontent").css('height', '124%')
    });

});