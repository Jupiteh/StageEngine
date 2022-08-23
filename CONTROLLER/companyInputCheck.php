<?php
$bdd = new PDO("mysql:host=localhost;dbname=test", "root", "");

$input = $_GET['input'];

if ($input == 'companyName') {
    if (isset($_GET['companyID'])) {
        $companyID = $_GET['companyID'];
    } else {

        $companyNameVal = $_GET['companyNameVal'];

        // Vérifie si le companyName éciste déjà en BDD
        $companyNameExist = $bdd->prepare("SELECT EXISTS(SELECT * FROM company WHERE companyName='$companyNameVal') AS OUTPUT");
        $companyNameExist->execute();
        $hasWicompanyNameExistResultshResult = $companyNameExist->fetch();

        // Renvois au JS si le companyName éxiste déjà ou non
        echo $hasWicompanyNameExistResultshResult[0];
    }
}
