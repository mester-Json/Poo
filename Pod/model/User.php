<?php
require_once "utils/Db.php";

class Users
{
    public static function getAllUsers()
    {
        try {
            $db = new Db(HOST, DB_Name, USER, PASS);
            $query = "SELECT * FROM persone";
            $stmt = $db->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

$results = Users::getAllUsers();

foreach ($results as $result) {
    echo $result["fullname"] . "<br>";
    echo $result["mail"] . "<br>";
    echo $result["age"] . "<br>";
    echo '<a href="delete.php?delete=' . $result['id'] . '"><button> Supprimer </button></a>';
    echo '<a href="update.php?update=' . $result['id'] . '"><button> Modifier </button></a><br><br>';
}
