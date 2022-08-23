<!-- LINK -->
<?php require_once 'link.php' ?>

<script type="text/javascript" src="../assets/js/UserCU.js"></script>

<!-- NAVBAR -->
<?php include 'navbar.php' ?>

<!-- Db -->
<?php require_once '../MODEL/linkDb.php' ?>

<?php

$crud = $_GET['etat'];

if (isset($_GET['login'])) {
    $login = $_GET['login'];
}
?>

<?php

(isset($_COOKIE['permissions'])) ? $recup = unserialize($_COOKIE['permissions']) : '';
?>

<!-- CONTROLLER -->
<?php include '../CONTROLLER/userCruQueries.php' ?>




<!-- Tbalinks -->
<?php require_once 'tablinks.php' ?>



<div class="tabcontent">
    </br>
    <div class="card text-center">
        <div class="card-header">
        </div>
        <div class="card-body">

            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4">Utilisateur:

                        <form method='POST'>
                            <h1>Nom:
                                <input required type="text" name='name' class="form-control <?= ($crud == 'read') ? 'display-none' : '' ?>" id="" placeholder="Nom de l'utilisateur..." value='<?= ($crud == 'update') ? $name : '' ?>'>
                                <?= ($crud == 'read') ? $name : '' ?>
                                Prénom:
                                <input required type="text" name='firstName' class="form-control <?= ($crud == 'read') ? 'display-none' : '' ?>" id="" placeholder="Prénom de l'utilisateur..." value='<?= ($crud == 'update') ? $firstName : '' ?>'>
                                <?= ($crud == 'read') ? $firstName : '' ?>
                            </h1>
                </div>
            </div>

        </div>
        <div class="card-footer text-muted">
        </div>
    </div>

    </br>
    <div class="row">
        <!-- <div class='promotion-cell'> -->
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Promotion:
                        <?= ($crud == 'read') ? $promotion : '' ?>
                        <select name='promotion' class="form-control <?= ($crud == 'read') ? 'display-none' : '' ?>" name="promotion" value='<?= ($crud == 'update') ? $promotion : '' ?>'>
                            <?php if ($crud == 'update') { ?>
                                <option value="A2" <?= ($promotion == 'A2') ? "selected='selected'" : '' ?>>A2</option>
                                <option value="A3" <?= ($promotion == 'A3') ? "selected='selected'" : '' ?>>A3</option>
                                <option value="A4" <?= ($promotion == 'A4') ? "selected='selected'" : '' ?>>A4</option>
                                <option value="A5" <?= ($promotion == 'A5') ? "selected='selected'" : '' ?>>A5</option>
                        </select><?php
                                } else if (($crud == 'create')) { ?>
                        <option value="A2">A2</option>
                        <option value="A3">A3</option>
                        <option value="A4">A4</option>
                        <option value="A5">A5</option>
                        </select><?php
                                } ?>
                    </h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
        <!-- </div> -->
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Centre:
                        <?= ($crud == 'read') ? $center : '' ?>
                        <input required type="text" name='center' class="form-control <?= ($crud == 'read') ? 'display-none' : '' ?>" placeholder="Centre..." value='<?= ($crud == 'update') ? $center : '' ?>'>
                    </h5>
                </div>
            </div>
        </div>
    </div>
    </br>

    <?php if ($crud == 'create') { ?>
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Rôle:

                            <select class='form-control' name="role" id='role'>
                                <?= (in_array_any(['Creer_pilote'], $recup) == 1) ? '<option value="pilote">Pilote</option>' : '' ?>
                                <option value="delegue">Délégué</option>
                                <option value="etudiant">Etudiant</option>
                            </select>
                        </h5>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
        </div></br>
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Login:
                            <input class='form-control' type="text" name="login">
                        </h5>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Mot de passe:
                            <input class='form-control' type="text" name="mdp">
                        </h5>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?></br>

    <td><a href='userCU.php?etat=update&login=<?= $login ?>'>
            <button type="button" class="btn btn-secondary btn-lg <?= ($crud != 'read') ? 'display-none' : '' ?>">Modifier l'utilisateur</button>


    <td><a href=''>

            <button type="submit" method='post' name='submitUser' class="btn btn-secondary btn-lg <?= ($crud == 'read') ? 'display-none' : '' ?>">Enregistrer</button>
            </form>
            </br></br></br>
</div>


<!--FOOTER-->
<?php include 'footer.php' ?>