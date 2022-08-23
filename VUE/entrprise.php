<?php

$companyId = $_GET['companyId'];

$bdd = new PDO("mysql:host=localhost;dbname=test", "root", "");

$requete5 = "SELECT companyName FROM company WHERE companyId='".$companyId. "'";
$requstatement = $bdd->query($requete5);

      $result = $requstatement->fetch();



echo $result[0];
  

?>