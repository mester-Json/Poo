<?php

include("class/Animals2.php");

$animal = new Animals(
    "LeChat",
    "Noir et blanc",
    10,
    "Chat",
    "un petit Chat ",
    new DateTime()
);


$myDog = new Animals(
    "le chien",
    "Noir et blanc",
    10,
    "Chien",
    "un Chien",
    new DateTime()
);
echo $animal;
echo $myDog->__toString();
