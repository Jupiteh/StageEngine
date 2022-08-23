<?php $bdd = new PDO("mysql:host=localhost;dbname=test", "root", "");

// $bdd->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
// //La ligne suivante indique à PDO de bien générer une erreur fatale si un problème survient. On peut détecter et gérer les problèmes de cette manière.
// $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);