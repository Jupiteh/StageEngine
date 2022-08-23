<!-- LINK -->
<?php include 'link.php' ?>

<!-- NAVBAR -->
<?php include 'navbar.php' ?>

<!-- Tbalinks -->
<?php require_once 'tablinks.php' ?>

<div class="tabcontent">


    <?php require_once '../CONTROLLER/filterOffer.php' ?>

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
                <td>Compétence: <input id="competence-search" type="text" placeholder="Compétence..." class='form-control'></td>
                <td>Localité: <input id="locality-search" type="text" placeholder="Localité..." class='form-control'></td>
                <td>Nom entrerprise: <input id="name-search" type="text" placeholder="Nom entreprise..." class='form-control'></td>
                <td>Durée: <input id="duration-search" type="text" placeholder="Durée min..." class='form-control'></td>
                <td>Rémunération: <input id="remuneration-search" type="text" placeholder="Rémunération min..." class='form-control'></td>
                <td>Nombres de places: <input id="places-search" type="text" placeholder="Nombres places min..." class='form-control'></td>
                <td></td>

            </thead>

            <?php
            for ($i = 0; $i < count($tab); $i++) {
            ?>
                <tbody id="dataList" class=''>
                    <tr>
                        <td><a href='offerCU.php?etat=read&offerID=<?= $tab[$i]['offerID'] ?>'>
                                <button class="btn btn-secondary" type="button">Consulter</button></td>


                        <td>
                            <competence><?= $tab[$i]['competence'] ?></competence>
                        </td>
                        <td>
                            <locality><?= $tab[$i]['locality'] ?></locality>
                        </td>
                        <td>
                            <companyName><?= $tab[$i]['companyName'] ?></companyName>
                        </td>
                        <td>
                            <duration><?= $tab[$i]['duration'] ?> semaines</duration>
                        </td>
                        <td>
                            <remuneration><?= $tab[$i]['remuneration'] ?> €</remuneration>
                        </td>
                        <td>
                            <nbPlaces><?= $tab[$i]['nbPlaces'] ?></nbPlaces>
                        </td>
                        <td></td>

                        <td><a href='../VUE/delete.php?offerID=<?= $tab[$i]['offerID'] ?>&type=offer'>
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
    <td><a href='../VUE/offerCU.php?etat=create'>
            <button id='myButton' class="btn btn-primary" type="button">Ajouter une offre</button> </td>

</div>




<!--FOOTER-->
<?php include 'footer.php' ?>