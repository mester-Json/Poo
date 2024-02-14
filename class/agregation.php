<?php

require_once "User.php";

$adress = new Adress("rue de la gare", "5", "Bruxelles", "1000");
$user = new User("John Doe", "", "", $adress);

$user2 = new User("Jane caca", "", "", $adress);
echo $user;
echo "<br>";
echo $user2;