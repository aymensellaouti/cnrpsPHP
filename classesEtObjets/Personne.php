<?php
Class Personne {
    private $name;
    private $numero;
    
    public function sePresenter() {
        echo "<br>Bonjour je suis ".$this->name. " et mon téléphone est ".$this->numero;
    }

    public function getName() {
        return $this->name;
    }
    public function setName($newName) {
        $this->name = $newName; 
    }

    public function getNumero() {
        return $this->numero;
    }
    public function setNumero($numero) {
        $this->numero = $numero; 
    }

    public function quiAlePlusGrandNumero(Personne $otherPersonne) {
        if ($this->numero > $otherPersonne->getNumero()) {
            echo "<br> Le numero de ".$this->name." est plus grand que le numero de ". $otherPersonne->name;
        } else {
            echo "<br> Le numero de ".$otherPersonne->name." est plus grand que le numero de ". $this->name;           
        }
    }
}