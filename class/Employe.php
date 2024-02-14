<?php


abstract class Employe
{
    protected $matricule;
    protected $nom;
    protected $prenom;
    protected DateTime $dateNaissance;

    public function __construct($matricule, $nom, $prenom, $dateNaissance)
    {
        $this->matricule = $matricule;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = new DateTime($dateNaissance);
    }

    public function __toString()
    {
        return "Matricule: $this->matricule, Nom: $this->nom, Prénom: $this->prenom, Date de naissance: " . $this->dateNaissance->format('d/m/Y');

    }
    abstract public function getSalaire();
    public function getTypeEmploye()
    {
        return get_class($this);
    }

    public function getMatricule()
    {
        return $this->matricule;
    }

    public function getStatut()
    {
        return $this->getTypeEmploye();
    }
}


class Ouvrier extends Employe
{
    private $dateEntree;
    const SMIG = 2500;

    public function __construct($matricule, $nom, $prenom, $dateNaissance, $dateEntree)
    {
        parent::__construct($matricule, $nom, $prenom, $dateNaissance);
        $this->dateEntree = $dateEntree;
    }

    public function getSalaire()
    {
        $dateEmbauche = new DateTime($this->dateEntree);
        $dateAujourdhui = new DateTime();
        $anciennete = $dateEmbauche->diff($dateAujourdhui)->y;
        $salaire = self::SMIG + $anciennete * 100;
        return ($salaire > self::SMIG * 2) ? self::SMIG * 2 : $salaire;
    }

    public function __toString()
    {
        return parent::__toString() . ", Date d'entrée: $this->dateEntree";
    }
}

class Cadre extends Employe
{
    private $indice;

    public function __construct($matricule, $nom, $prenom, $dateNaissance, $indice)
    {
        parent::__construct($matricule, $nom, $prenom, $dateNaissance);
        $this->indice = $indice;
    }

    public function getSalaire()
    {
        if ($this->indice >= 1 && $this->indice <= 4) {
            switch ($this->indice) {
                case 1:
                    return 13000;
                case 2:
                    return 15000;
                case 3:
                    return 17000;
                case 4:
                    return 20000;
            }
        }
        return "error";
    }
}

class Patron extends Employe
{
    private $chiffreAffaire;
    private $pourcentage;

    public function __construct($matricule, $nom, $prenom, $dateNaissance, $chiffreAffaire, $pourcentage)
    {
        parent::__construct($matricule, $nom, $prenom, $dateNaissance);
        $this->chiffreAffaire = $chiffreAffaire;
        $this->pourcentage = $pourcentage;
    }

    public function getSalaire()
    {
        return $this->chiffreAffaire * $this->pourcentage / 100;
    }
}


