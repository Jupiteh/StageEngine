<!-- <!DOCTYPE html> -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- LINK -->
<?php include 'link.php' ?>


<!-- NAVBAR -->
<?php include 'navbar.php' ?>


<!-- Tbalinks -->
<?php
require_once 'tablinks.php'
?>

<div class="tabcontent">


  <?php require_once '../CONTROLLER/filterCompany.php' ?>

  <button type="button" class="btn btn-dark btn-switch" id='btn-switch1'>
    << </button>
      <button type="button" class="btn btn-dark btn-switch" id='btn-switch2'>
        >>
      </button>
      </br>
      </br>

      <div class='main'>
        <table id='table-name' class='table table-hover'>
          <H2>Liste:</H2>
          </br>

          <input id="search" type="text" placeholder="Recherche sur tous les champs..." class='form-control'></br>

          <thead class='table-secondary'>
            <td>Nbr/page<select class="form-control w-75" id="nbr-per-page">
                <option>1</option>
                <option selected="selected">2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
              </select>
            </td>
            <td>Nom: <input id="name-search" type="text" placeholder="Nom..." class='form-control input-search'></td>
            <td>Secteur d'activitée: <input id="activity-search" type="text" placeholder="Secteur d'activité..." class='form-control input-search'></td>
            <td class='responsive-hide'>Localités: <input id="locality-search" type="text" placeholder="Localité..." class='form-control input-search responsive-hide'></td>
            <td class='responsive-hide'>Stagiaires CESI: <input id="interns-search" type="text" placeholder="Nombre minimale..." class='form-control input-search responsive-hide'></td>
            <td>Confiance Pilote: <input id="review-pilot-search" type="text" placeholder="Confiance minimale..." class='form-control input-search'></td>
            <td class='responsive-hide'>Evaluation: <input id="rating-search" type="text" placeholder="Notation minimale..." class='form-control input-search'></td>
            <td></td>
          </thead>
          <?php include "../VUE/table.php"; ?>
        </table>

        <div id='pagination'>
        <button id='previous-btn' class='btn btn-secondary display-none' type='button'><</button>
        <span id="current-page">1</span>
        <button id='next-btn' class='btn btn-secondary' type='button'>></button>
          <?php
          // if ($page != 1) {
          //   $j = $page - 1;
          //   echo "<a href='?page=$j'><button id='myButton' class='btn btn-secondary' type='button'><</button></a>&nbsp&nbsp&nbsp&nbsp;";
          // }

          // for ($i = 1; $i <= $nbr_page; $i++) {
          //   if ($page != $i) {
          //     echo "<a href='?page=$i'><button id='myButton' class='btn btn-secondary' type='button'>$i</button></a>&nbsp&nbsp&nbsp&nbsp;";
          //   } else {
          //     $j = $i + 1;
          //     echo "<a>$i</a>&nbsp;";
          //   }
          // }
          // if ($page != $nbr_page) {
          //   $k = $page + 1;
          //   echo "<a href='?page=$k'><button id='myButton' class='btn btn-secondary' type='button'>></button></a>";
          //   // echo "<a href='?page=$k'>></a>&nbsp;";
          // }
          ?>
        </div>
      </div>

      </br>
      <td><a href='entrepriseCU.php?etat=create'>
          <button id='myButton' class="btn btn-primary" type="button">Ajouter une entreprise</button>
      </td></a>

</div>


<!--FOOTER-->
<?php include 'footer.php' ?>