<!-- LINK -->
<?php include 'link.php' ?>

<script type="text/javascript" src="../assets/js/rating.js"></script>
<script type="text/javascript" src="../assets/js/companyCU.js"></script>


<!-- NAVBAR -->
<?php include 'navbar.php' ?>

<!-- Db -->
<?php require_once '../MODEL/linkDb.php' ?>

<?php

$crud = $_GET['etat'];
?>
<crud data-crud='<?= $crud ?>'>
<?php

if (isset($_GET['companyID'])) {
  $companyID = $_GET['companyID'];
}
?>



<!-- CONTROLLER -->
<?php include '../CONTROLLER/companyCruQueries.php' ?>


<!-- Tbalinks -->
<?php
require_once 'tablinks.php'
?>

<div class="tabcontent">

  </br>
  <div class="card text-center">
    <div class="card-header">
      <!-- ... -->
    </div>
    <div class="card-body">

      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Nom de l'entreprise:

            <form method='POST'>
              <input required data-companyname='<?= $companyName ?>' type="text" name='companyName' class="form-control <?= ($crud == 'read') ? 'display-none' : '' ?>" id="company-name" placeholder="Nom entreprise..." value='<?= ($crud == 'update') ? $companyName : '' ?>'>
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
          <h5 class="card-title">Secteur d'activité <?= ($crud != 'read') ? "<i class='fa-solid fa-circle-info' title=''></i>" : '' ?>:
            <input required type="text" name='companyActivity' class="form-control <?= ($crud == 'read') ? 'display-none' : '' ?>" id="" placeholder="Secteur d'activité..." value='<?= ($crud == 'update') ? $companyActivity : '' ?>'>
            <?= ($crud == 'read') ? $companyActivity : '' ?>
          </h5>
          <p class="card-text"></p>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Localité(s):
            <?php
            (isset($localitiesRes)) ? $size = sizeof($localitiesRes) : $size = 3;
            for ($i = 0; $i < $size; $i++) {
              (isset($localitiesRes)) ? $locality = $localitiesRes[$i]['locality'] : '';
            ?>
              <input type="text" name='locality<?= $i ?>' class="form-control <?= ($crud == 'read') ? 'display-none' : '' ?>" id="" placeholder="Localitée..." value='<?= ($crud == 'update') ? $locality : '' ?>'>
              <?= ($crud == 'read') ? $locality : '' ?></br>
          </h5>
        <?php }

        ?>
        </div>
      </div>
    </div>
  </div>

  </br>
  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Nombre de stagiaires CESI déjà acceptés en stage:
            <input required type="text" name='nbAcceptedInterns' class="form-control <?= ($crud == 'read') ? 'display-none' : '' ?>" id="" placeholder="Nombre de stagiaires..." value='<?= ($crud == 'update') ? $nbAcceptedInterns : '' ?>'>
            <?= ($crud == 'read') ? $nbAcceptedInterns : '' ?>
          </h5>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Confiance du Pilote de promotion:
            <input required type="text" name='reviewPilot' class="form-control <?= ($crud == 'read') ? 'display-none' : '' ?>" id="" placeholder="Confiance du pilote..." max=100 value='<?= ($crud == 'update') ? $reviewPilot : '' ?>'>
            <?= ($crud == 'read') ? $reviewPilot . '%' : '' ?>
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
          <h5 class="card-title">Evaluation des stagiaires:

            <!-- PLUGIN -->

            <!-- FRONT -->
            <div class='i-b rating'>
              <input id='hidden-crud' name="hidden-crud" hidden data-crud="<?= $crud ?>" value="<?= $rating ?>">

              <!--Les étoiles sont lues de droite à gauche dans le CSS d'où les ID sous la forme 4321 -->
              <?php for ($niveau = 4; $niveau > 0; $niveau--) : ?>
                <span class="<?= $rating == $niveau ? 'selected-star' : ''; ?> star" data-note="<?= $niveau ?>"></span>
              <?php endfor; ?>
            </div>
            <!-- PLUGIN -->


          </h5>
        </div>
      </div>
    </div>
  </div>

  </br>


  <td><a href='entrepriseCU.php?etat=update&companyID=<?= $companyID ?>'>
      <button type="button" class="btn btn-secondary btn-lg <?= ($crud != 'read') ? 'display-none' : '' ?>">Modifier l'entreprise</button>


  <td>

    <button type="submit" id='submit' method='post' name='submitCompany' class="btn btn-secondary btn-lg <?= ($crud == 'read') ? 'display-none' : '' ?>">Enregistrer</button>
    </form>
</div>






<!--FOOTER-->
<?php include 'footer.php' ?>