<?php


namespace Aluno\projetophp\Controller;


class Exercicio5Controller
{
    public static function exibir(){
        require_once("../src/view/exercicio5.php");
    }
    public static function exibirResultado(){
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $valor3 = $_POST['valor3'];
        $valor4 = $_POST['valor4'];
        $media = ($valor1 + $valor2 + $valor3 + $valor4) / 4 ;

      
        
        require_once("../src/view/exercicio5.php");
    }
}