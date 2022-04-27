<?php

class Matricial extends Impressora {
    private $numAgulhas;
    private $imprimeVias;


    public function getNumAgulhas(){
        return $this->numagulhas;
    }
    public function setNumAgulhas($numAgulhas){
        $this->numagulhas = $numAgulhas;
    }

    public function getImprimeVias(){
        return $this->imprimeVias;
    }
    public function setImprimeVias($imprimeVias){
        $this->imprimeVias = $imprimeVias;
    }
}