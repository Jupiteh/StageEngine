<?php


$bdd = new PDO("mysql:host=localhost;dbname=test", "root", "");

$offerID = $_GET['offerID'];
$login = $_GET['login'];

$apply = $bdd->prepare("UPDATE `wishlist` SET `apply`=1 WHERE `offerID`='$offerID' AND `login`='$login'");
$apply->execute();

