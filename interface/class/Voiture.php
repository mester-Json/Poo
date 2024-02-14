<?php

include 'interface/IDemarer.php';

class Voiture
{
    private string $marque;

    private bool $etat;
    private int $port;


    public function __construct(string $marque, int $port, )
    {
        $this->marque = $marque;
        $this->port = $port;
    }
    public function getMarque(): string
    {
        echo "La voiture est de marque " . $this->marque . "<br>";
        return $this->marque;
    }

    public function getPort(): int
    {
        echo "La voiture est de marque " . $this->marque . " et a " . $this->port . " portes<br>";
        return $this->port;
    }

    public function demarrer(): void
    {
        echo "Voiture is demarer<br>";
        $this->etat = true;
    }


    public function arreter(): void
    {
        echo "Voiture not found<br>";
        $this->etat = false;
    }
}