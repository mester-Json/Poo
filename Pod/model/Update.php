<?php

require_once "utils/Db.php";


class Update
{
    public static function Update($newFullname, $newMail, $newAge, $id)
    {
        try {
            $db = new Db(HOST, DB_Name, USER, PASS);
            $query = "UPDATE persone SET fullname = :fullname, mail = :mail, age = :age WHERE id = :id";
            $stmt = $db->prepare($query);
            $stmt->bindParam(':fullname', $newFullname);
            $stmt->bindParam(':mail', $newMail);
            $stmt->bindParam(':age', $newAge);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}