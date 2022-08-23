<?php
$offerID = $_GET['offerID'];
$login = $_GET['login'];

// Récupère l'email de l'entreprise
  $getEmail = $bdd->prepare("SELECT email FROM offer WHERE offerID='$offerID'");
  $getEmail->execute();
  $result = $getEmail->fetch();
  $email = $result[0];


// Passe l'état à 'postulé' quand l'email est envoyé
if (isset($_POST['sendmail'])) {

$setApply = $bdd->prepare("UPDATE `wishlist` SET `apply`=1 WHERE offerID='$offerID' AND login='$login'");
$setApply->execute();
}