<?php

if (isset($_POST['addWish'])) {

   $login = $_COOKIE['login'];

   if (isset($_GET['offerID'])) {
      $offerID = $_GET['offerID'];
   }

   $hasWish = $bdd->prepare("SELECT EXISTS(SELECT wishID FROM wishlist WHERE offerID=$offerID AND login='$login') AS OUTPUT");
   $hasWish->execute();
   $hasWishResult = $hasWish->fetch();

   // Vérifie que l'offre n'est pas déjà dans la wishlist de l'étudiant
   if ($hasWishResult['OUTPUT'] == 0) {

      // Insère l'offre dans la wishlist
      $addWish = $bdd->prepare("INSERT INTO `wishlist`(`login`, `offerID`) VALUES ('$login','$offerID')");
      $addWish->execute();
   }
}
