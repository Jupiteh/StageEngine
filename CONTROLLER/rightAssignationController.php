<?php
$bdd = new PDO("mysql:host=localhost;dbname=test", "root", "");

// Au chargement de la page


// UPDATE les droits
if (isset($_POST['addRight'])) {

    (isset($_POST['company'])) ? $company = 1 : $company = 0;
    (isset($_POST['offer'])) ? $offer = 1 : $offer = 0;
    (isset($_POST['pilote'])) ? $pilote = 1 : $pilote = 0;
    (isset($_POST['delegue'])) ? $delegue = 1 : $delegue = 0;
    (isset($_POST['student'])) ? $student = 1 : $student = 0;

    $updateRights[0] = $bdd->prepare("UPDATE `right` SET `state`=$company WHERE `rightName`='company'");
    $updateRights[1] = $bdd->prepare("UPDATE `right` SET `state`=$offer WHERE `rightName`='offer'");
    $updateRights[2] = $bdd->prepare("UPDATE `right` SET `state`=$pilote WHERE `rightName`='pilote'");
    $updateRights[3] = $bdd->prepare("UPDATE `right` SET `state`=$delegue WHERE `rightName`='delegue'");
    $updateRights[4] = $bdd->prepare("UPDATE `right` SET `state`=$student WHERE `rightName`='student'");
    for ($i = 0; $i < 5; $i++) {
        $updateRights[$i]->execute();
    }
}
?>
<!-- getRight -->
<?php require_once '../CONTROLLER/getRight.php' ?>