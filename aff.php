<?php

require_once "./class/Voiture.php";
require_once "./class/Avion.php";

$voiture = new Voiture("Renault", "rouge", 5, 200, 4, 5, 100);
$avion = new Avion("airbus", "blanc", 250, 4000, 2);

$monGarage = [];
array_push($monGarage, $voiture);
$monGarage[] = $avion;
echo "<br>";
foreach ($monGarage as $vehicule) {
    echo $vehicule;
    echo "<br>";
    echo $vehicule->avancer(1);
    echo "<br>";
    echo $vehicule->reculer();
}

