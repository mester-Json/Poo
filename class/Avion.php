<?php
require_once("./class/Vehicule.php");
//Création d'une classe avion qui hérite la classe Vehicule 
//on marque l'héritage avec le mot clé extends
class Avion extends Vehicule
{
    private int $reacteur;

    public function __construct(string $uneMarque, string $couleur, int $nbPassager, int $vitesse, int $reacteur)
    {
        //parent::__construct permet de faire appel au à la méthode __construct de la classe parente ( Vehicule )
        parent::__construct($uneMarque, $couleur, $nbPassager, $vitesse);

        $this->reacteur = $reacteur;
    }
    public function __toString(): string
    {
        return parent::__toString() . "le nombre de reacteurs est de : " . $this->reacteur . "<hr>";

    }


    public function getReacteur(): int
    {
        return $this->reacteur;
    }

    public function setReacteur(int $reacteur)
    {
        $this->reacteur = $reacteur;
    }

    public function avancer(int $distance): string
    {
        return parent::avancer($distance) . " en volant";
    }

    public function reculer(): string
    {
        return " en volant";
    }
}
;