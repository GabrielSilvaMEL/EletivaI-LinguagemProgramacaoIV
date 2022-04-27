<?php

class Impressora {
    private $marca;
    private $modelo;
    private $colorida;
    private $peso;

    public function getMarca (){
        return $this->marca;
    }
    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function getModelo (){
        return $this->modelo;
    }
    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function getColorida (){
        return $this->colorida;
    }
    public function setColorida($colorida) {
        $this->colorida = $colorida;
    }

    public function getPeso  (){
        return $this->peso;
    }
    public function setPeso($peso) {
        $this->peso = $peso;
    }

}
?>