<?php
/**
 * Created by PhpStorm.
 * User: Stereo
 * Date: 10/04/2018
 * Time: 12:12
 */

include "./classes/Voiture.php";
include "./functions/debug.php";

$voiture1 = new Voiture("Jaune", 900, "Vertigo", 150000);
$voiture2 = new Voiture("Vert", 1000, "Vewe", 1500);

echo $voiture1 -> demarrer();
$voiture1 -> vitesse = 50;
echo "<p>l'EC de la voiture est " . $voiture1 -> calculerEnergieCinetique() . "</p>";
debug($voiture1);

echo $voiture2 -> demarrer();
$voiture2 -> vitesse = 10;
echo "<p>l'EC de la voiture est " . $voiture2 -> calculerEnergieCinetique() . "</p>";
debug($voiture2);
