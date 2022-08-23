<?php
require("../assets/lib/smarty-master/libs/smarty.class.php"); // On inclut la classe Smarty
?>

<?php
$smarty = new Smarty();
?>

<!-- LINK -->
<?php include 'link.php' ?>

<!-- NAVBAR -->
<?php include 'navbar.php' ?>

<!-- Db -->
<?php include '../MODEL/linkDb.php' ?>


<?php

$login = $_COOKIE['login'];
$recup = unserialize($_COOKIE['permissions']);
?>

</br>

<div class="card text-center">
  <div class="card-header">

  </div>
  <div class="card-body">
    <h5 class="card-title">
      <h2>Bonjour <?= $login ?></h2>
      <p class="card-text"></p>
      <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
  </div>
  <div class="card-footer text-muted">

  </div>
</div>

<!-- GetWishList -->
<?php include '../CONTROLLER/getWishList.php' ?>





</div>


<!--FOOTER-->
<?php include 'footer.php' ?>