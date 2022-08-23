<!-- LINK -->
<?php include 'link.php' ?>


<!-- NAVBAR -->
<?php include 'navbar.php' ?>



</br>
<form method='POST'>
    <input type="text" name="company1" placeholder="Entreprise 1..." class='form-control'></br>
    <input type="text" name="company2" placeholder="Entreprise 2..." class='form-control'></br>
    <input type="submit" name='submitCompany' class="btn btn-secondary btn-lg" value='Comparer'></input>
</form>


<?php
require_once '../CONTROLLER/compareCompanyController.php';
?>

<?php
if (isset($_POST['submitCompany']) && !empty($_POST['company1']) && !empty($_POST['company2'])) {
?>
    <div class='main'>
        <table class='table table-hover table-responsive'>
            <H2>Entreprise 1:</H2>
            </br>

            <?php
            ?>

            <thead class='table-secondary'>

                <td></td>
                <td>Nom:</td>
                <td>Secteur d'activitée:</td>
                <td>Localités:</td>
                <td>Stagiaires CESI:</td>
                <td>Note pilote:</td>
                <td>Note etudiants:</td>
                <td></td>

            </thead>

            <tbody id="dataList" class=''>
                <tr>
                    <td><a href='entrepriseCU.php?etat=read&companyID=<?= $tabCompany1[2] ?>'>
                            <button class="btn btn-secondary" type="button">Consulter</button> </td>


                    <td><?= $tabCompany1[1] ?></td>
                    <td><?= $tabCompany1[3] ?></td>
                    <td><?= $tabCompany1[5] ?></td>
                    <td><?= $tabCompany1[0] ?></td>
                    <td><?= $tabCompany1[4] . '%' ?></td>
                    <td><?= $tabCompany1[6] . ' etoiles' ?></td>

                </tr>
            </tbody>
        </table>

        </br></br>

        <table class='table table-hover table-responsive'>
            <H2>Entreprise 2:</H2>
            </br>

            <?php
            ?>

            <thead class='table-secondary'>

                <td></td>
                <td>Nom:</td>
                <td>Secteur d'activitée:</td>
                <td>Localités:</td>
                <td>Stagiaires CESI:</td>
                <td>Note pilote:</td>
                <td>Note etudiants:</td>
                <td></td>

            </thead>

            <tbody id="dataList" class=''>
                <tr>
                    <td><a href='entrepriseCU.php?etat=read&companyID=<?= $tabCompany2[2] ?>'>
                            <button class="btn btn-secondary" type="button">Consulter</button> </td>


                    <td><?= $tabCompany2[1] ?></td>
                    <td><?= $tabCompany2[3] ?></td>
                    <td><?= $tabCompany2[5] ?></td>
                    <td><?= $tabCompany2[0] ?></td>
                    <td><?= $tabCompany2[4] . '%' ?></td>
                    <td><?= $tabCompany2[6] . ' etoiles' ?></td>

                </tr>
            </tbody>




        </table>
    <?php
} else {
    echo 'Veuillez renseigner les deux champs "Entreprise".';
}
    ?>

    </div>