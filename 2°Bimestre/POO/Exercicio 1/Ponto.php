<?php

    Class Ponto{
        private $x;
        private $y;
        private static $contador = 0;


        //construtor
        public function __construct($x, $y)
        {
            $this->setX($x);
            $this->setY($y);
            self::setContador();
            
        }
        public function calcularDistancia(Ponto $p){
            $valorX = pow(($p->getX()- $this->x), 2);
            $valorY = pow(($p->getY()- $this->y),2);
            return sqrt($valorX + $valorY);
        }

        public function calcularDistancia2($x2,$y2){
            $valorX = pow(($x2->getX()- $this->x), 2);
            $valorY = pow(($y2->getY()- $this->y),2);
            return sqrt($valorX + $valorY);
        }

        //"Calcular distância 3" que informa os 4 valores
        public function calcularDistancia3($x1,$x2,$y1,$y2){
            $valorX = pow(($x2-$x1), 2);
            $valorY = pow(($y2-$y1), 2);
            return sqrt($valorX + $valorY);
        }

        //Usa-se $this para acessar propriedades e métodos que fazem escopo de um objeto. 
        //Usa-se self para acessar propriedades e métodos que fazem parte do escopo da classe, que são static.
        private static function setContador(){
            self::$contador++;
        }
        public static function getContador(){
            return self:: $contador;
        }

        //get e set
        public function getX(){
            return $this->x;
        }
        public function setX($x){
            $this->x = $x;
        }

        public function getY(){
            return $this->y;
        }
        public function setY($y){
            $this->y = $y;
        }
    }
?>