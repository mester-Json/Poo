<?php

// Pour créer une classe on utiliser le mot clé class, le nom de la class doit toujours être en PascalCase
class Animals
{

    //Attributs
    //l'opérateur d'accècibilité public permet d'accèder à l'attribut à l'exterieur de la class
    //ici on déclare un attribut public de type string correspondant au nom 
    public string $name;
    public string $color;
    public int $longevity;

    public string $species;

    public string $description;

    public DateTime $birthDay;


    // la methode __construct est la méthode qui est appeler durant l'instancition d'un objet 
    public function __construct(string $name, string $color, int $longevity, string $species, string $description, DateTime $birthDay)
    {
        $this->name = $name;
        $this->color = $color;
        $this->longevity = $longevity;
        $this->species = $species;
        $this->description = $description;
        $this->birthDay = $birthDay;
    }

    // la methode __toString() est la methode qui est appeler  lorsque que l'on veux convertir notre objet en string exemple echo $myAnimal 
    public function __toString()
    {

        return
        " <br> nom : " . $this->name . "<br>" .
        " color : " . $this->color . "<br>".
        " longevité : " . $this->longevity . " ans" . "<br>".
        " espece : " . $this->species . "<br>" .
        " description : " . $this->description . "<br>".
        " date de naissance : " .
        $this->birthDay->format('d/m/y');
    }
}
