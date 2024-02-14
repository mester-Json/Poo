<?php

require_once "./utils/Db.php";


class Insert
{
    private $fullname;
    private $mail;
    private $age;

    public function __construct($fullname, $mail, $age)
    {
        $this->fullname = $fullname;
        $this->mail = $mail;
        $this->age = $age;
    }

    public function getFullname()
    {
        return $this->fullname;
    }

    public function setFullname($fullname)
    {
        $this->fullname = $fullname;
    }

    public function getMail()
    {
        return $this->mail;
    }

    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public static function Insert($fullname, $mail, $age)
    {
        try {
            $db = new Db(HOST, DB_Name, USER, PASS);
            $query = "INSERT INTO persone (fullname, mail, age) VALUES (?, ?, ?)";



            $stmt = $db->prepare($query);
            $stmt->bindParam(1, $fullname);
            $stmt->bindParam(2, $mail);
            $stmt->bindParam(3, $age);
            $stmt->execute();

            echo "New record created successfully";

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();

        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
