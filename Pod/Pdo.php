<?php

require_once "model/User.php";


$personnes = User::getAll();
foreach ($personnes as $personne) {
    echo '<p style="color: white; background-color: red ;">' . $personne->getFullname() . " " . $personne->getMail() . " " . $personne->getAge() . "</p><br>";
}

echo '<style>body { background-color: white; }</style>';
