<?php

class Voiture
{
    private $matricule;
    private $nbChevaux;
    private $couleur;
    private $vitesse;

    public function __construct($matricule = 0, $nbChevaux = 0,
                                $couleur = 'blanche', $vitesse = 100)
    {
        $this->matricule = $matricule;
        $this->nbChevaux = $nbChevaux;
        $this->couleur = $couleur;
        $this->vitesse = $vitesse;
    }

    public function tableauDeBord()
    {
        $date = new DateTime('NOW');
        echo 'Bonjour Nous sommes le ' . $date->format('Y-m-d') . ' <br>';
        echo 'Mon matricule : ' . $this->getMatricule() . ' <br>';
        echo 'Vitesse actuelle : ' . $this->getVitesse() . ' <br>';
    }

    public function getMatricule()
    {
        return $this->matricule;
    }

    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;
    }

    public function getNbChevaux()
    {
        return $this->nbChevaux;
    }

    public function setNbChevaux($nbChevaux)
    {
        $this->nbChevaux = $nbChevaux;
    }

    public function getCouleur()
    {
        return $this->couleur;
    }
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }
    public function getVitesse()
    {
        return $this->vitesse;
    }
    public function setVitesse($vitesse)
    {
        $this->vitesse = $vitesse;
    }
    public function accelerer()
    {
        $this->vitesse += 10;
    }
    public function freiner()
    {
        $this->vitesse -= 10;
    }
}