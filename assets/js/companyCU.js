$(document).ready(function () {


    checkCompanyName();
});

function checkCompanyName() {
    $("#company-name").on("keyup", function () {

        let crud = $('crud').data("crud");

        let companyNameVal = $(this).val();

        if ((companyNameVal == "")) {
            $("#company-name").css("border", "1px solid lightgrey");
        }
        else {
            $.get("../CONTROLLER/companyInputCheck.php",
                {
                    input: 'companyName',
                    companyNameVal: companyNameVal
                },
                function (data) {

                    // En create
                    if (crud == 'create') {
                        // Si la valeur de l'input existe déjà en BDD
                        if (data == 1) {
                            $("#company-name").css("border", "2px solid red");
                            $("#submit").prop('disabled', true);
                            alert("Attention cette entreprise existe déjà.");
                        }
                        // Si la valeur de l'input n'existe pas déjà en BDD
                        else {
                            $("#company-name").css("border", "2px solid green");
                            $("#submit").prop('disabled', false);
                        }
                    }

                    // En update
                    else if (crud == 'update') {
                        // CompanyName de l'entreprise en modification
                        let companyName = $("#company-name").data("companyname");

                        // Si la valeur de l'input existe déjà en BDD et n'est pas celle de l'entreprise actuellement en modification
                        if (data == 1 && companyNameVal != companyName) {
                            $("#company-name").css("border", "2px solid red");
                            $("#submit").prop('disabled', true);
                            alert("Attention cette entreprise existe déjà.");
                        }
                        // Si la valeur de l'input existe déjà en BDD et est celle de l'entreprise actuellement en modification
                        // ou s'il la valeur n'est pas en BDD
                        else if (data == 1 && companyNameVal == companyName || data == 0) {
                            $("#company-name").css("border", "2px solid green");
                            $("#submit").prop('disabled', false);
                        }
                    }
                });
        }
    });
}