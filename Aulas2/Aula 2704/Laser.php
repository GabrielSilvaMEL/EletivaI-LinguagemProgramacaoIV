<?php

class Matricial extends Impressora {
    private $capacidadeToner;
    private $frenteVerso;

    public function __construct($marca, $modelo, $capacidadeToner, $colorida, $frenteVerso, $peso)
    {
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setCapacidadeToner($capacidadeToner);
        $this->setColorida($colorida);
        $this->setFrenteVerso($frenteVerso);
        $this->setPeso($peso);
    }
    
    public function getCapacidadeToner(){
        return $this->capacidadeToner;
    }
    public function setCapacidadeToner($capacidadeToner){
        $this->capacidadeToner = $capacidadeToner;
    }

    public function getFrenteVerso(){
        return $this->frenteVerso;
    }
    public function setFrenteVerso($frenteVerso){
        $this->frenteVerso = $frenteVerso;
    }
}