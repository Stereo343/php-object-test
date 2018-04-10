<?php

include "./classes/Voiture.php";

$voiture1 = new Voiture();
$voiture1 -> couleur = "Jaune";
$voiture1 -> marque = "Vertigo";
$voiture1 -> masse = "900";
$voiture1 -> puissance = "150000";

debug($voiture1);