<?php

require_once "./model/Insert.php";

Insert::Insert($_POST['fullname'], $_POST['mail'], $_POST['age']);

if (isset($_POST['fullname']) && isset($_POST['mail']) && isset($_POST['age'])) {
    $fullname = $_POST['fullname'];
    $mail = $_POST['mail'];
    $age = $_POST['age'];
}
