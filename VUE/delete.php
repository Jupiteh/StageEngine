<?php
$bdd = new PDO("mysql:host=localhost;dbname=test", "root", "");



$type = $_GET['type'];


if ($type == 'entreprise') {

    $companyID = $_GET['companyID'];

    $requete = $bdd->prepare("DELETE FROM company WHERE companyID='" . $companyID . "'");
    $requete->execute();

    header("Location: ../VUE/listeEntreprise.php");
} else if ($type == 'offer') {

    $offerID = $_GET['offerID'];

    $requete = $bdd->prepare("DELETE FROM offer WHERE offerID='" . $offerID . "'");
    $requete->execute();

    header("Location: ../VUE/listeOffer.php");
} else if ($type == 'wishlist') {

    $offerID = $_GET['offerID'];

    $requete = $bdd->prepare("DELETE FROM wishlist WHERE offerID='" . $offerID . "'");
    $requete->execute();

    header("Location: ../VUE/account.php");
} else if ($type == 'user') {

    $login = $_GET['login'];

    $requete = $bdd->prepare("DELETE FROM authentification WHERE login='" . $login . "'");
    $requete->execute();

    header("Location: ../VUE/listeUser.php");
}
