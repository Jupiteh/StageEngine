<!-- READ -->
<?php

if (!empty($companyID)) {
  $requete5 = $bdd->prepare("SELECT * FROM company WHERE companyID='" . $companyID . "'");
  $requete5->execute();
  $result = $requete5->fetch();

  // Get les locality dans la table de croisement
  $getLocalities = $bdd->prepare("SELECT locality FROM localityxcompany WHERE companyID='" . $companyID . "'");
  $getLocalities->execute();
  $localitiesRes = $getLocalities->fetchAll();

  // Faire un string du tableau des localités
  $localitiesTab = '';
  for ($i = 0; $i < sizeof($localitiesRes); $i++) {
    $localitiesTab .= $localitiesRes[$i]['locality'] . ', ';
  }

  $nbAcceptedInterns = $result[0];
  $companyName = $result[1];
  $companyActivity = $result[3];
  $reviewPilot = $result[4];
  $locality = $localitiesTab; //Récupère le string listant les localités
  $rating = $result[6];
}
?>


<!-- CREATE/UPDATE -->
<?php
if (isset($_POST['submitCompany'])) {

  $companyName = $_POST['companyName'];
  $nbAcceptedInterns = $_POST['nbAcceptedInterns'];
  $companyActivity = $_POST['companyActivity'];
  $reviewPilot = $_POST['reviewPilot'];
  (isset($_POST['locality0'])) ? $locality0 = $_POST['locality0'] : '';
  (isset($_POST['locality1'])) ? $locality1 = $_POST['locality1'] : '';
  (isset($_POST['locality2'])) ? $locality2 = $_POST['locality2'] : '';
  $note = (int) $_POST['hidden-crud'];


  if ($crud == 'create') {

    // INSERT dans table company
    $create = $bdd->prepare("INSERT INTO `company`(`nbAcceptedInterns`, `companyName`, `companyActivity`, `reviewPilot`, `rating`) VALUES ('$nbAcceptedInterns','$companyName', '$companyActivity','$reviewPilot', '$note')");
    $create->execute();

    // GET ID company
    $getID = $bdd->prepare("SELECT companyID FROM company WHERE companyName='$companyName'");

    $getID->execute();
    $id = $getID->fetch();
    (int) $realID = $id['companyID'];
    $realID;


    // INSERT les localités dans la table de croisementZ
    if ($locality0 != NULL) {
      $loca0 = $bdd->prepare("INSERT INTO `localityxcompany` (`companyID`, `locality`, `id`) VALUES ($realID, '$locality0', NULL)");
      $loca0->execute();
    }
    if ($locality1 != NULL) {
      $loca1 = $bdd->prepare("INSERT INTO `localityxcompany` (`companyID`, `locality`, `id`) VALUES ($realID, '$locality1', NULL)");
      $loca1->execute();
    }
    if ($locality2 != NULL) {
      $loca2 = $bdd->prepare("INSERT INTO `localityxcompany` (`companyID`, `locality`, `id`) VALUES ($realID, '$locality2', NULL)");
      $loca2->execute();
    }
  } else if ($crud == 'update') {
    $update = $bdd->prepare("UPDATE `company` SET `nbAcceptedInterns`='$nbAcceptedInterns',`companyName`='$companyName',`companyActivity`='$companyActivity',`reviewPilot`='$reviewPilot',`rating`='$note' WHERE `companyID`=$companyID");
    $update->execute();

    // GET ID company
    $getID = $bdd->prepare("SELECT companyID FROM company WHERE companyName='$companyName'");

    $getID->execute();
    $id = $getID->fetch();
    (int) $realID = $id['companyID'];
    $realID;

    // GET les ID locality de la table de croisment
    $getIDloca = $bdd->prepare("SELECT id FROM localityxcompany WHERE companyID=$realID");

    $getIDloca->execute();
    $idloca = $getIDloca->fetchAll();
    $idloca0 = $idloca[0]['id'];
    $idloca1 = $idloca[1]['id'];
    $idloca2 = $idloca[2]['id'];

    $loca0 = $bdd->prepare("UPDATE `localityxcompany` SET `locality`='$locality0' WHERE `companyID`=$companyID AND `id`=$idloca0");
    $loca0->execute();
    $loca1 = $bdd->prepare("UPDATE `localityxcompany` SET `locality`='$locality1' WHERE `companyID`=$companyID AND `id`=$idloca1");
    $loca1->execute();
    $loca2 = $bdd->prepare("UPDATE `localityxcompany` SET `locality`='$locality2' WHERE `companyID`=$companyID AND `id`=$idloca2");
    $loca2->execute();
  }


  if ($crud == 'create') {
    header("Location: ../VUE/listeEntreprise.php");
  } else if ($crud == 'update') {
    header("Location: ../VUE/entrepriseCU.php?etat=update&companyID=" . $companyID);
  }
}

?>