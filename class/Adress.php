<?php


class Adress
{

    private string $street;
    private string $streetNumber;
    private string $city;
    private string $zip;


    public function __construct(string $street, string $streetNumber, string $city, string $zip)
    {
        $this->street = $street;
        $this->streetNumber = $streetNumber;
        $this->city = $city;
        $this->zip = $zip;
    }

    public function getStreet(): string
    {
        return $this->street;
    }
    public function getStreetNumber(): string
    {
        return $this->streetNumber;
    }
    public function getCity(): string
    {
        return $this->city;
    }
    public function getZip(): string
    {
        return $this->zip;
    }

    public function __toString(): string
    {
        return "Adresse : " . $this->street . " " . $this->streetNumber . " " . $this->city . " " . $this->zip;
    }

}


