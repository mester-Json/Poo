<?php
include 'class/Employe.php';

$employes = [
    new Ouvrier('123', 'Dupont', 'Jean', '1990-01-01', '2010-01-01'),
    new Cadre('456', 'Martin', 'Pierre', '1970-02-03', '1'),
    new Cadre('789', 'Leboss', 'Big', '1970-01-01', '5'),
    new Patron('789', 'Leboss', 'Big', '1970-01-01', 1000000, 10)
];

foreach ($employes as $employe) {
    echo $employe->__toString();
    echo "<hr>";
    echo "<br>Statut: " . $employe->getStatut() . "<br>";
    echo "Salaire: " . $employe->getSalaire() . " €<br>";
    echo "<hr>";
}