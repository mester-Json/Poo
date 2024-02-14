<?php

include 'interface/IDemarer.php';

class Smarphone
{
    private string $marque;
    private string $color;
    private bool $etat;


    public function __construct(string $marque, string $color)
    {
        $this->marque = $marque;
        $this->color = $color;
    }

    public function getMarque(): string
    {
        echo "Le smartphone est de marque " . $this->marque . "<br>";
        return $this->marque;
    }

    public function getColor(): string
    {
        echo "Le smartphone est de marque " . $this->marque . " et est de couleur " . $this->color . "<br>";
        return $this->color;

    }
    public function demarrer(): void
    {
        echo "Tel allumée<br>";
        $this->etat = true;
    }


    public function arreter(): void
    {
        echo "Tel eteint <br>";
        $this->etat = false;
    }

}