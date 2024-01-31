<?php

require_once("class/Vehicule.php");

//Création d'une classe voiture qui hérite la classe Vehicule 
//on marque l'héritage avec le mot clé extends
class Voiture extends Vehicule
{

    private int $nbRoue;
    private int $nbPorte;
    private int $nbChevaux;

    public function __construct(
        string $uneMarque,
        string $couleur,
        int $nbPassager,
        int $vitesse,
        int $nbRoue,
        int $nbPorte,
        int $nbChevaux,
    ) {
        //parent::__construct permet de faire appel au à la méthode __construct de la classe parente ( Vehicule )
        parent::__construct(
            $uneMarque,
            $couleur,
            $nbPassager,
            $vitesse
        );
        $this->nbRoue = $nbRoue;
        $this->nbPorte = $nbPorte;
        $this->nbChevaux = $nbChevaux;
    }

    public function getNbRoue(): int
    {
        return $this->nbRoue;
    }


    public function setNbRoue(int $nbRoue)
    {
        $this->nbRoue = $nbRoue;
    }


    public function getNbPorte(): int
    {
        return $this->nbPorte;
    }


    public function setNbPorte(int $nbPorte)
    {
        $this->nbPorte = $nbPorte;
    }

    public function getNbChevaux(): int
    {
        return $this->nbChevaux;
    }
    public function setNbChevaux(int $nbChevaux)
    {
        $this->nbChevaux = $nbChevaux;
    }

    public function __toString(): string
    {

        return parent::__toString() .
            " le nombre de roue est de " .
            $this->nbRoue . " le nombre de porte est de " .
            $this->nbPorte . " la puissance est de " .
            $this->nbChevaux . " CH  <hr> ";
    }

    //Surcharge de la méthode avancer 
    public function avancer(int $distance): string
    {
        return parent::avancer($distance) . " en roulant";
    }

    public function reculer(): string
    {
        return " en reculant";
    }
}
