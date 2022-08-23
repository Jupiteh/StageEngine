<?php

$bdd = new PDO("mysql:host=localhost;dbname=test", "root", "");

$requete4 = "SELECT * FROM authentification";
$requstatement = $bdd->query($requete4);

// Compter nbr enregistrements
$count = $bdd->prepare("SELECT count(login) as cpt from authentification");
$count->setFetchMode(PDO::FETCH_ASSOC);
$count->execute();
$tcount = $count->fetchAll();


//Pagination
if (isset($_GET['page'])) $page = $_GET['page'];
if (empty($page)) $page = 1;

$nbr_element_page = 5;
$nbr_page = ceil($tcount[0]['cpt'] / $nbr_element_page);
$start = ($page - 1) * $nbr_element_page;


// Get le type de user à afficher
(isset($_GET['role']) ? $role = $_GET['role'] : $role = 'false');

$select = $bdd->prepare("SELECT * FROM authentification WHERE role='$role' limit $start, $nbr_element_page");
$select->setFetchMode(PDO::FETCH_ASSOC);
$select->execute();
$tab = $select->fetchAll();
if ($role == 'false') {
    echo "<h2><b>Choisissez un type d'utilisateur dans le menu</b></h2>";
}
