<?php

class Animals
{
    public string $name;

    public string $couleur;


    public DateTime $longiviter;

    public string $escpece;


    public DateTime $naiscance;

    public string $description;

    public function __construct(string $name, string $couleur, DateTime $longiviter, $escpece, DateTime $naiscance, string $description)
    {
        $this->name = $name;
        $this->couleur = $couleur;
        $this->longiviter = $longiviter;
        $this->escpece = $escpece;
        $this->naiscance = $naiscance;
        $this->description = $description;
    }

}