<?php

include("class/Person.php");

$myPerson = new Person("Toto", "Titi", new DateTime('1999/12/30'), "M");

// var_dump($myPerson);

echo "<br>";

echo $myPerson->firstName;

echo "<br>";

$myPerson->lastName = "Tata";
echo $myPerson->lastName;

echo "<br>";

echo $myPerson->birthDay->format("d/m/Y");

echo "<br>";

echo $myPerson->gender;

echo "<br>";

