<!-- READ -->
<?php

if (!empty($login)) {
    $requete5 = $bdd->prepare("SELECT * FROM authentification WHERE login='" . $login . "'");
    $requete5->execute();
    $result = $requete5->fetch();



    $login = $result[0];
    $name = $result[3];
    $firstName = $result[4];
    $promotion = $result[5];
    $center = $result[6];
}
?>


<!-- CREATE/UPDATE -->
<?php
if (isset($_POST['submitUser'])) {

    $name = $_POST['name'];
    $firstName = $_POST['firstName'];
    $center = $_POST['center'];



    if ($crud == 'create') {
        $login = $_POST['login'];
        $mdp = $_POST['mdp'];
        $mdpHash = password_hash($mdp, PASSWORD_DEFAULT);
        $role = $_POST['role'];

        if ($role == 'admin') {
            $promotion = $_POST['promotion'];
        } else if ($role == 'pilote') {
            $promotion = $_POST['promotion'];
        } else if ($role == 'delegue') {
        } else if ($role == 'etudiant') {
            $promotion = $_POST['promotion'];
        }

        if ($role == 'delegue') {
            $sql = $bdd->prepare("INSERT INTO authentification (login, mdp, role, Name, firstName, Center) VALUES ('$login', '$mdpHash', '$role', '$name', '$firstName', '$center')");
        } else {
            $sql = $bdd->prepare("INSERT INTO authentification (login, mdp, role, Name, firstName, Promotion, Center) VALUES ('$login', '$mdpHash', '$role', '$name', '$firstName', '$promotion', '$center')");
        }
    } else if ($crud == 'update') {
        $promotion = $_POST['promotion'];
        $sql = $bdd->prepare("UPDATE `authentification` SET `Name`='$name',`firstName`='$firstName',`Promotion`='$promotion',`Center`='$center' WHERE `login`='$login'");
    }
    $sql->execute();

    if ($crud == 'create') {
        header("Location: ../VUE/listeUser.php");
    } else if ($crud == 'update') {
        header("Location: ../VUE/userCU.php?etat=update&login=" . $login);
    }
}
?>