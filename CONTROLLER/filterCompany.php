<?php


$sql = "SELECT * FROM company LIMIT 0, 2";


$bdd = new PDO("mysql:host=localhost;dbname=test", "root", "");

// $requete4 = "SELECT * FROM company";
// $requstatement = $bdd->query($requete4);

// // Compter nbr enregistrements
// $count = $bdd->prepare("SELECT count(companyID) as cpt from company");
// $count->setFetchMode(PDO::FETCH_ASSOC);
// $count->execute();
// $tcount = $count->fetchAll();


// //Pagination
// if (isset($_GET['page'])) $page = $_GET['page'];
// if (empty($page)) $page = 1;

// $nbr_element_page = 3;
// $nbr_page = ceil($tcount[0]['cpt'] / $nbr_element_page);
// $start = ($page - 1) * $nbr_element_page;


// SELECT
// $select = $bdd->prepare("$sql limit $start, $nbr_element_page");
$select = $bdd->prepare("$sql");
$select->setFetchMode(PDO::FETCH_ASSOC);
$select->execute();
$companies = $select->fetchAll();

// Get les locality dans la table de croisement
for ($i = 0; $i < sizeof($companies); ++$i) {
    $idCompany = $companies[$i]['companyID'];
    $getLocalities = $bdd->prepare("SELECT locality FROM localityxcompany WHERE companyID='$idCompany'");
    $getLocalities->execute();
    $companyLocalities = $getLocalities->fetchAll();
    // Faire un string du tableau des localités
    $companies[$i]['locality'] = '';
    foreach ($companyLocalities as $locality) {
        $companies[$i]['locality'] .= $locality['locality'] . '</br>';
    }
}
// $getLocalities = $bdd->prepare("SELECT locality FROM localityxcompany WHERE companyID=38");
// $getLocalities->execute();
// var_dump($localitiesRes = $getLocalities->fetchAll());

// // Compter le nombre de localités
// $count = count($localitiesRes);
// var_dump($count);
