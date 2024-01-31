<?php

include "class/Cat.php";

$cat = new Cat("Grumpy", "Chat", 10, "img/75552.ngsversion.1422285553360.jpeg", "Croquettes", 30, 12, 3);
$chien = new Cat("Baguera ", "Chien", 15, "img/choses-que-chiens-detestent-062128.jpeg", "Croquettes", 40, 10, 2);
$cheval = new Cat("Petit Poney", "Poney", 80, "img/Image-par-Manfred-Richter-de-Pixabay.jpeg", "Croquettes", 50, 8, 1);

echo "<table style=\"font-size: 20px; color: white; border: 15px solid cyan;  padding: 25px;  background-color: black;\">";
echo "<tr><th>Nom</th><th>Espèce</th><th>Longévité</th><th>Image</th><th>Alimentation</th><th>Vitesse</th><th>Temps de sommeil</th><th>Nombre de repas par jour</th></tr>";
echo $cat;
echo $chien;
echo $cheval;
echo "</table>";