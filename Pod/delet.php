<?php

require_once "model/Delete.php";

// if (isset($_POST['user_id'])) {

// header("location :  ");
//     Delete::Delete($_POST['user_id']);
//     echo "L'utilisateur a bien été supprimé";
// }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer un compte utilisateur</title>
</head>

<body>
    <h1>User</h1>
    <form method="POST" action="">
        <label for="user_id">ID de l'utilisateur :</label>
        <input type="text" name="user_id" id="user_id" required>
        <a href="maj.php"><button type="submit">Sup</button></a>
    </form>
</body>

</html>