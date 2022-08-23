<?php
require_once("../assets/lib/smarty-master/libs/smarty.class.php"); // On inclut la classe Smarty
?>

<?php
$smarty = new Smarty();
?>

<?php
// Récupère le login
// $login = $_COOKIE['login'];
$smarty->assign('login', $_COOKIE['login']);

$hasWish = $bdd->prepare("SELECT EXISTS(SELECT wishID FROM wishlist WHERE login='$login') AS OUTPUT");
$hasWish->execute();
var_dump($hasWishResult = $hasWish->fetch());


// Vérifie que la personne a une wishlist
if ($hasWishResult['OUTPUT'] == 1) {

    $getWishList = $bdd->prepare("SELECT offerID FROM wishlist WHERE login='{$login}'");
    $getWishList->execute();
    $tabOfferID = $getWishList->fetchAll();


    for ($i = 0; $i < count($tabOfferID); $i++) {
        $offerID[] = (int)$tabOfferID[$i]['offerID'];
    }
?>
    </br>
    <div class='main'>
        <table class='table table-hover table-responsive'>
            <H2>Votre WishList:</H2>
            </br>

            <input id="search" type="text" placeholder="Recherche..." class='form-control'></br>
            <?php
            ?>

            <thead class='table-secondary'>
                <td></td>
                <td>Compétence:</td>
                <td>Localitée:</td>
                <td>Nom entrerprise:</td>
                <td>Durée:</td>
                <td></td>
            </thead>

            <?php
            for ($j = 0; $j < count($offerID); $j++) {

                // SELECT les infos des offres de la wishlist
                $select = $bdd->prepare("SELECT * FROM offer WHERE offerID=$offerID[$j]");
                $select->setFetchMode(PDO::FETCH_ASSOC);
                $select->execute();
                $tab = $select->fetchAll();

                // Récupère si l'étudiant a déjà postulé ou non à l'offre
                $getApply = $bdd->prepare("SELECT apply FROM wishlist WHERE offerID=$offerID[$j] AND login='$login'");
                $getApply->execute();
                $res = $getApply->fetch();
                $apply = $res;
            ?>
                <tbody id="dataList" class=''>
                    <tr>
                        <td><a href='offerCU.php?etat=read&offerID=<?= $tab[0]['offerID'] ?>'>
                                <button class="btn btn-secondary" type="button">Consulter</button> </td>
                        <td><?= $tab[0]['competence'] ?></td>
                        <td><?= $tab[0]['locality'] ?></td>
                        <td><?= $tab[0]['companyName'] ?></td>
                        <td><?= $tab[0]['duration'] ?></td>
                        <td><a href='../VUE/delete.php?offerID=<?= $tab[0]['offerID'] ?>&type=wishlist'>
                                <button class="btn btn-dark" type="button">Supprimer de la liste</button></a>
                            <a href='../VUE/mail.php?offerID=<?= $tab[0]['offerID'] ?>&login=<?= $login ?>'>
                                <button method='post' class="btn btn-primary <?= ($apply[0] == 1) ? 'display-none' : '' ?>" name='applyButton' type="button">Postuler à l'offre</button></a>
                            <h5><?= ($apply[0] == 1) ? 'Vous avez déjà postulé à cette offre.' : '' ?></h5>
                        </td>
                    </tr>
                </tbody>
            <?php
            }
            ?>
        </table>
    </div>
<?php
}
