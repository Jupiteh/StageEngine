<!-- READ -->
<?php

$login = $_COOKIE['login'];

$crud = $_GET['etat'];

if (isset($_GET['offerID'])) {
  $offerID = $_GET['offerID'];
}


if (!empty($offerID)) {
  $requete5 = $bdd->prepare("SELECT * FROM offer WHERE offerID='" . $offerID . "'");
  $requete5->execute();
  $result = $requete5->fetch();


  $competence = $result[2];
  $locality = $result[3];
  $companyName = $result[4];
  $duration = $result[5];
  $remuneration = $result[6];
  $offerDate = $result[7];
  $nbPlaces = $result[8];
  $email = $result[9];
}
?>

<!-- CREATE/UPDATE -->
<?php

if (isset($_POST['submitOffer'])) {

  $competence = $_POST['offerCompetence'];
  $locality = $_POST['locality'];
  ($crud == 'create') ? $companyName = $_POST['companyName'] : '';
  $duration = $_POST['duration'];
  $remuneration = $_POST['remuneration'];
  $offerDate = $_POST['offerDate'];
  $nbPlaces = $_POST['nbPlaces'];
  $email = $_POST['email'];

  if ($crud == 'create') {
    $sqlID = $bdd->prepare("SELECT companyID FROM company WHERE companyName='$companyName'");
    $sqlID->execute();
    $result = $sqlID->fetch();
    $companyID = $result[0];

    $sql = $bdd->prepare("INSERT INTO `offer`(`companyID`, `competence`, `locality`, `companyName`, `duration`, `remuneration`, `offerDate`, `nbPlaces`, `email`) VALUES ('$companyID','$competence', '$locality','$companyName','$duration', '$remuneration', '$offerDate', '$nbPlaces', '$email')");
  } else if ($crud == 'update') {

    $sql = $bdd->prepare("UPDATE `offer` SET `competence`='$competence',`locality`='$locality',`duration`='$duration',`remuneration`='$remuneration',`offerDate`='$offerDate',`nbPlaces`='$nbPlaces',`email`='$email' WHERE `offerID`='$offerID'");
  }
  $sql->execute();

  if ($crud == 'create') {
    header("Location: ../VUE/listeOffer.php");
  } else if ($crud == 'update') {
    header("Location: ../VUE/offerCU.php?etat=update&offerID=" . $offerID);
  }
}
?>