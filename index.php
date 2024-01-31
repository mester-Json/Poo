<?php

include "class/Animals.php";

$myAnimals = new Animals("moka", "moka", new DateTime("2030-01-01"), "jack russell", new DateTime("2016-03-28"), "petit chien très affectueux");

$age = $myAnimals->naiscance->diff(new DateTime())->y;

echo $myAnimals->name . "<br>";
echo $myAnimals->couleur . "<br>";
echo $age . " ans" . "<br>";
echo $myAnimals->escpece . "<br>";
echo $myAnimals->naiscance->format("d/m/y") . "<br>";
echo $myAnimals->description . "<br>";

$longevity = $myAnimals->longiviter->format("Y") - $myAnimals->naiscance->format("Y");
echo "Longévité : " . $longevity . " ans" . "<br>";
