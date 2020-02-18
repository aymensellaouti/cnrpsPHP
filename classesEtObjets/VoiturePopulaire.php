
<?php
include 'Vehicule.php';

class VoiturePopulaire extends VoitureAbstraite implements Vehicule
{
    private $options;
    public function tableauDeBord()
    {
        parent::tableauDeBord();
        echo '<br> Mes options sont : '.$this->options;
    }

    /**
     * @return mixed
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param mixed $options
     */
    public function setOptions($options)
    {
        $this->options = $options;
    }

    public function reglageMoteur()
    {
        echo 'Ok moteur réglé';
    }

    public function demarrer()
    {
        // TODO: Implement demarrer() method.
    }

    public function arreter()
    {
        // TODO: Implement arreter() method.
    }

    public function accelert()
    {
        $this->vitesse += 25;
        // TODO: Implement accelert() method.
    }
}