<?php


class VoiturePopulaire extends Voiture
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

}