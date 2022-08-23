<?php
// Récupère l'état des droits des délégués

$getRights = $bdd->prepare("SELECT state FROM `right` ORDER BY `order`");
$getRights->execute();
$states = $getRights->fetchAll();

$company = $states[0][0];
$offer = $states[1][0];
$pilote = $states[2][0];
$delegue = $states[3][0];
$student = $states[4][0];
?>