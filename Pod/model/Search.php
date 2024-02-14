<?php

include_once "utils/Db.php";

$db = new Db(HOST, DB_Name, USER, PASS);

class Search
{
    public static function search($id)
    {
        try {
            global $db;
            $query = "SELECT * FROM persone WHERE id LIKE ?";
            $stmt = $db->prepare($query);
            $stmt->bindValue(1, $id, PDO::PARAM_STR);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}

