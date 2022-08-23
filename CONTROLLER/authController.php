<?php
require_once '../MODEL/perm.php';

$bdd = new PDO("mysql:host=localhost;dbname=test", "root", "");


if (isset($_POST['auth'])) {


    if (!empty($_POST['LoginAuth']) && !empty($_POST['mdpAuth'])) {

        $login = $_POST['LoginAuth'];
        $mdp = $_POST['mdpAuth'];

        $requete4 = "SELECT mdp, role, login FROM authentification WHERE login='" . $login . "'";
        $requstatement = $bdd->query($requete4);
        $result = $requstatement->fetch();


        if (isset($result[1])) {
            $role = $result[1];
        }

        if (isset($result[0])) {

            $mdpUnhash = password_verify($mdp, $result[0]);

            if ($mdpUnhash == 1) {
                include '../CONTROLLER/permChecker.php';

                echo '<h3><p style="color:white;">Bienvenue ' . $login . "</p></h3>";

                setcookie('login', $login, time() + (600));
            } else {
                echo "<h3><p style='color:white;'>Erreur d'identifiant ou mot de passe.</p></h3>";
            }
        } else {
            echo "<h3><p style='color:white;'>Erreur d'identifiant.</p></h3>";
        }
    }
}
