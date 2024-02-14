<?php
require_once "utils/Db.php";
require_once "model/Delete.php";
require_once "model/User.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $fullname = $_POST["fullname"];
    $mail = $_POST["mail"];
    $age = $_POST["age"];

    Update::Update($fullname, $mail, $age, $id);

    header("Location: Select.php");

}

?>