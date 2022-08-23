<?php
$bdd = new PDO("mysql:host=localhost;dbname=test", "root", "");

if (isset($_POST['submitCompany'])) {

    $company1 = $_POST['company1'];
    $company2 = $_POST['company2'];


    $reqCompany1 = $bdd->prepare("SELECT * FROM company where companyName='$company1'");
    $reqCompany1->execute();
    $tabCompany1 = $reqCompany1->fetch();

    $reqCompany2 = $bdd->prepare("SELECT * FROM company where companyName='$company2'");
    $reqCompany2->execute();
    $tabCompany2 = $reqCompany2->fetch();
}
?>