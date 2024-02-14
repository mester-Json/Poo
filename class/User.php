<?php

require_once "Adress.php";

class User
{
    private string $fullname;
    private string $email;
    private string $password;
    private Adress $adress;


    public function __construct(string $fullname, string $email, string $password, Adress $adress)
    {
        $this->fullname = $fullname;
        $this->email = $email;
        $this->password = $password;
        $this->adress = $adress;
    }

    public function getFullname(): string
    {
        return $this->fullname;
    }
    public function getEmail(): string
    {
        return $this->email;
    }
    public function getPassword(): string
    {
        return $this->password;
    }
    public function getAdress(): Adress
    {
        return $this->adress;
    }

    public function __toString(): string
    {
        return "Nom complet : " . $this->fullname . " Email : " . $this->email . " Mot de passe : " . $this->password . " Adresse : " . $this->adress;
    }

}

