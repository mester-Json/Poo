<?php

class Person
{
    // Atributs ( les caractéristiques des objets Person )

    public string $firstName;

    public string $lastName;

    public DateTime $birthDay;

    public string $gender;

    public function __construct(string $firstName, string $lastName, DateTime $birthDay, string $gender)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthDay = $birthDay;
        $this->gender = $gender;
    }
}