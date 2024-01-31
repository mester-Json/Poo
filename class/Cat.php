<?php

class Cat
{
    private string $nom;
    private string $espece;
    private int $longevite;
    private string $image;
    private string $alimentation;
    private int $vitesse;
    private int $tempsDodo;
    private int $nbRepasParJour;
    private static $count = 0;

    public function __construct(string $nom, string $espece, int $longevite, string $image, string $alimentation, int $vitesse, int $tempsDodo, int $nbRepasParJour)
    {
        $this->nom = $nom;
        $this->espece = $espece;
        $this->longevite = $longevite;
        $this->setImage($image);
        $this->alimentation = $alimentation;
        $this->vitesse = $vitesse;
        $this->tempsDodo = $tempsDodo;
        $this->nbRepasParJour = $nbRepasParJour;
    }

    public function setNom($nom)
    {
        if (strlen($nom) >= 2) {
            throw new InvalidArgumentException('Le nom doit avoir plus de 2 caractères.');
        }
        $this->nom = $nom;
    }

    public function setImage($image)
    {
        $extension = pathinfo($image, PATHINFO_EXTENSION);
        if (!in_array($extension, ['jpeg', 'png', 'gif'])) {
            throw new InvalidArgumentException('L\'image doit être au format jpeg, png ou gif.');
        }
        $this->image = $image;
    }

    public function getNom(): string
    {
        return $this->nom;
    }
    public function getEspece(): string
    {
        return $this->espece;
    }
    public function getLongevite(): int
    {
        return $this->longevite;
    }
    public function getImage(): string
    {
        return $this->image;
    }
    public function getAlimentation(): string
    {
        return $this->alimentation;
    }
    public function getVitesse(): int
    {
        return $this->vitesse;
    }
    public function getTempsDodo(): int
    {
        return $this->tempsDodo;
    }
    public function getNbRepasParJour(): string
    {
        return $this->nbRepasParJour;
    }

    public static function getCount()
    {
        return self::$count;
    }

    public function __toString()
    {
        $tableRow = "<tr>";
        $tableRow .= "<td>" . self::$count += 1 . "</td>";
        $tableRow .= "<td style='border: 10px solid cyan; font-size: 20px; color:white; padding: 15px;  text-align: center; background-color: black;'>" . $this->nom . "</td>";
        $tableRow .= "<td style='border: 10px solid cyan; font-size: 20px; color:white; padding: 50px;  text-align: center; background-color: black;'>" . $this->espece . "</td>";
        $tableRow .= "<td style='border: 10px solid cyan; font-size: 20px; color:white; padding: 50px;  text-align: center; background-color: black;'>" . $this->longevite . "</td>";
        $tableRow .= "<td style='border: 10px solid cyan; font-size: 20px; color:white; padding: 50px;  text-align: center; background-color: black;'><img src='" . $this->image . "' alt='Image de l'animal' width='auto' height='100px'></td>";
        $tableRow .= "<td style='border: 10px solid cyan; font-size: 20px; color:white; padding: 50px;  text-align: center; background-color: black;'>";
        $tableRow .= "<ul>";
        $alimentationItems = explode(',', $this->alimentation);
        foreach ($alimentationItems as $item) {
            $tableRow .= "<li>" . trim($item) . "</li>";
        }
        $tableRow .= "</ul>";
        $tableRow .= "</td>";
        $tableRow .= "<td style='border: 10px solid cyan; font-size: 20px; color:white; padding: 50px; text-align: center; background-color: black;'>" . $this->vitesse . "</td>";
        $tableRow .= "<td style='border: 10px solid cyan; font-size: 20px; color:white; padding: 50px; text-align: center; background-color: black;'>" . $this->tempsDodo . "</td>";
        $tableRow .= "<td style='border: 10px solid cyan; font-size: 20px; color:white; padding: 20px; text-align: center; background-color: black;'>" . $this->nbRepasParJour . "</td>";
        $tableRow .= "</tr>";
        return $tableRow;
    }
}