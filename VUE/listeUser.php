<!-- LINK -->
<?php include 'link.php' ?>


<!-- NAVBAR -->
<?php include 'navbar.php' ?>



<!-- Tbalinks -->
<?php require_once 'tablinks.php' ?>



<div class="tabcontent">


  <?php require_once '../CONTROLLER/filterUser.php' ?>

  </br>
  <div class='main'>
    <table id='table-name' class='table table-hover table-responsive'>
      <H2>Liste:</H2>
      </br>


      <input id="search" type="text" placeholder="Recherche sur tous les champs..." class='form-control'></br>
      <?php
      ?>

      <thead class='table-secondary'>

        <td></td>
        <td>Nom: <input id="name-search" type="text" placeholder="Nom..." class='form-control'></td>
        <td>Prénom: <input id="firstName-search" type="text" placeholder="Prénom..." class='form-control'></td>
        <td>Centre: <input id="center-search" type="text" placeholder="Centre..." class='form-control'></td>
        <td>Promotion: <input id="promotion-search" type="text" placeholder="Promotion..." class='form-control'></td>
        <td></td>

      </thead>

      <?php
      for ($i = 0; $i < count($tab); $i++) {
      ?>
        <tbody id="dataList" class=''>
          <tr>
            <td><a href='userCU.php?etat=read&login=<?= $tab[$i]['login'] ?>'>
                <button class="btn btn-secondary" type="button">Consulter</button></td>

            <td>
              <name><?= $tab[$i]['Name'] ?></name>
            </td>
            <td>
              <firstName><?= $tab[$i]['firstName'] ?></firstName>
            </td>
            <td>
              <center_><?= $tab[$i]['Center'] ?></center_>
            </td>
            <td>
              <promotion><?= $tab[$i]['Promotion'] ?></promotion>
            </td>

            <td><a href='delete.php?login=<?= $tab[$i]['login'] ?>&type=user'>
                <button class="btn btn-dark" type="button">Supprimer</button> </td>
          </tr>
        </tbody>


      <?php
      }
      ?>


    </table>

    <div id='pagination'>
      <?php
      for ($i = 1; $i <= $nbr_page; $i++) {
        if ($page != $i) {
          echo "<a href='?page=$i'>$i</a>&nbsp;";
        } else {
          echo "<a>$i</a>&nbsp;";
        }
      }
      ?>
    </div>


  </div>



  </br>
  <td><a href='userCU.php?etat=create'>
      <button id='myButton' class="btn btn-primary" type="button">Ajouter une personne</button> </td>

</div>




<!--FOOTER-->
<?php include 'footer.php' ?>