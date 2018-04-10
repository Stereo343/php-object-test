<?php

include "./classes/Voiture.php";
include "./functions/debug.php";

$voiture1 = new Voiture("Jaune", 900, "Vertigo", 150000);

echo $voiture1 -> demarrer();

debug($voiture1);