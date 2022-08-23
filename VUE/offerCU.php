<!-- LINK -->
<?php require_once 'link.php' ?>
<script type="text/javascript" src="../assets/js/offerCU.js"></script>



<!-- NAVBAR -->
<?php require_once 'navbar.php' ?>

<!-- Db -->
<?php require_once '../MODEL/linkDb.php' ?>

<?php


?>



<!-- CONTROLLER -->
<?php require_once '../CONTROLLER/offerCruQueries.php' ?>
<?php
require_once '../CONTROLLER/wishlist.php'
?>


<!-- Tbalinks -->
<?php require_once 'tablinks.php' ?>

<div class="tabcontent">


  </br>
  <div class="card text-center">
    <div class="card-header">
      <!-- ... -->
    </div>
    <div class="card-body">

      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Nom de l'entreprise de l'offre:

            <?= ($crud != 'read') ? "<form method='POST'>" : '' ?>
            <input required type="text" name='companyName' class="form-control <?= ($crud == 'read') ? 'display-none' : '' ?>" value='<?= ($crud == 'update') ? $companyName : '' ?>' id="" placeholder="Nom entreprise..." <?= ($crud == 'update') ? 'disabled' : '' ?>>
            <?= ($crud == 'read') ? $companyName : '' ?>
          </h1>
        </div>
      </div>

    </div>
    <div class="card-footer text-muted">
      <!-- ... -->
    </div>
  </div>

  </br>
  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Compétences demandées:
            <input required type="text" name='offerCompetence' class="form-control <?= ($crud == 'read') ? 'display-none' : '' ?>" id="" placeholder="Secteur d'activité..." value='<?= ($crud == 'update') ? $competence : '' ?>'>
            <?= ($crud == 'read') ? $competence : '' ?>
          </h5>
          <p class="card-text"></p>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Localité(s):

            <input required type="text" name='locality' class="form-control <?= ($crud == 'read') ? 'display-none' : '' ?>" id="" placeholder="Localitée..." value='<?= ($crud == 'update') ? $locality : '' ?>'>
            <?= ($crud == 'read') ? $locality : '' ?>
          </h5>
        </div>
      </div>
    </div>
  </div>

  </br>
  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Durée du stage:
            <input required type="text" name='duration' class="form-control <?= ($crud == 'read') ? 'display-none' : '' ?>" id="" placeholder="Nombre de stagiaires..." value='<?= ($crud == 'update') ? $duration : '' ?>'>
            <?= ($crud == 'read') ? $duration : '' ?>
          </h5>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Rémunération:
            <input required type="text" name='remuneration' class="form-control <?= ($crud == 'read') ? 'display-none' : '' ?>" id="" placeholder="Confiance du pilote..." value='<?= ($crud == 'update') ? $remuneration : '' ?>'>
            <?= ($crud == 'read') ? $remuneration : '' ?>
          </h5>
        </div>
      </div>
    </div>
  </div>

  <!-- </form> -->

  </br>
  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Date de l'offre:
            <input required type="text" name='offerDate' class="form-control <?= ($crud == 'read') ? 'display-none' : '' ?>" id="" placeholder="Confiance du pilote..." value='<?= ($crud == 'update') ? $offerDate : '' ?>'>
            <?= ($crud == 'read') ? $offerDate : '' ?>
          </h5>
        </div>
      </div>
    </div>

    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Nombre de places:
            <input required type="text" name='nbPlaces' class="form-control <?= ($crud == 'read') ? 'display-none' : '' ?>" id="" placeholder="Confiance du pilote..." value='<?= ($crud == 'update') ? $nbPlaces : '' ?>'>
            <?= ($crud == 'read') ? $nbPlaces : '' ?>
          </h5>
        </div>
      </div>
    </div>
  </div>

  </br>

  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">E-mail:
            <input required type="text" name='email' class="form-control <?= ($crud == 'read') ? 'display-none' : '' ?>" id="" placeholder="E-mail..." value='<?= ($crud == 'update') ? $email : '' ?>'>
            <?= ($crud == 'read') ? $email : '' ?>
          </h5>
        </div>
      </div>
    </div>

    </br>

    <div class="col-sm-6">
      <button type="submit" method='post' name='submitOffer' class="btn btn-secondary btn-lg <?= ($crud == 'read') ? 'display-none' : '' ?>">Enregistrer</button>
    </div>
  </div>
  </br>
  <div class='align'>

    <a href='../VUE/offerCU.php?etat=update&offerID=<?= $offerID ?>'>
      <button type="button" class="btn btn-secondary btn-lg <?= ($crud != 'read') ? 'display-none' : '' ?>">Modifier l'offre</button></a>
    <td>&nbsp;</td>
    <td>&nbsp;</td>

    <form method='POST'>
      <button type="submit" method='post' name='addWish' class="btn btn-primary btn-lg <?= ($crud == 'read') ? '' : 'display-none' ?>">Ajouter à la Wishlist</button>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
  </div>
  </form>


</div>

<?= ($crud == 'update') ? '</form>' : '' ?>




<!--FOOTER-->
<?php require_once 'footer.php' ?>