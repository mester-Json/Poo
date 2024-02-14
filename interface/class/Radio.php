<?php

include 'interface/IDemarer.php';

class Radio
{
    private string $color;
    private int $volume;
    private bool $etat;
    private string $marque;

    public function setMarque(string $marque): void
    {
        echo "La radio est de marque " . $marque . "<br>";
        $this->marque = $marque;
    }

    public function setColor(string $color): void
    {
        echo "La radio est de couleur " . $color . "<br>";
        $this->color = $color;
    }

    public function setVolume(int $volume): void
    {
        echo "Le volume est à " . $volume . "<br>";
        $this->volume = $volume;
    }

    public function demarrer(): void
    {
        echo "La radio est allumée<br>";
        $this->etat = true;
    }


    public function arreter(): void
    {
        echo "La radio est éteinte<br>";
        $this->etat = false;
    }
}