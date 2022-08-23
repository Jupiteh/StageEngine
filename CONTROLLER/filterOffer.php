<?php

$bdd = new PDO("mysql:host=localhost;dbname=test", "root", "");

$requete4 = "SELECT * FROM offer";
$requstatement = $bdd->query($requete4);

// Compter nbr enregistrements
$count = $bdd->prepare("SELECT count(offerID) as cpt from offer");
$count->setFetchMode(PDO::FETCH_ASSOC);
$count->execute();
$tcount = $count->fetchAll();


//Pagination
if (isset($_GET['page'])) $page = $_GET['page'];
if (empty($page)) $page = 1;

$nbr_element_page = 5;
$nbr_page = ceil($tcount[0]['cpt'] / $nbr_element_page);
$start = ($page - 1) * $nbr_element_page;


// SELECT
$select = $bdd->prepare("SELECT * FROM offer limit $start, $nbr_element_page");
// $select=$bdd->prepare("SELECT * FROM company");
$select->setFetchMode(PDO::FETCH_ASSOC);
$select->execute();
$tab = $select->fetchAll();
