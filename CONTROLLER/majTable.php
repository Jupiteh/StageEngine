<?php
// GET la requête généré en JS
$sql = $_GET['sql'];
$trouveunnom = $_GET['trouveunnom'];

$bdd = new PDO("mysql:host=localhost;dbname=test", "root", "");

// Récupères les enregistrements filtrés
$select = $bdd->prepare($sql);
$select->execute();
$companies = $select->fetchAll();

// Trouve un commentaire
$select = $bdd->prepare($trouveunnom);
$select->execute();
$tonresultat = $select->fetchAll();


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

//Pense à commenter ici aussi
$data = new stdClass();

$data->trouveunnom = sizeof($tonresultat);

// Ajoute la vue
ob_start();
echo include "../VUE/table.php";
$data->html = ob_get_clean();

echo json_encode($data);