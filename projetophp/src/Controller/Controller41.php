<?php


namespace Aluno\projetophp\Controller;
//Lista 4
//exercício 1

class Controller41
{
    public static function exibir(){
        require_once("../src/view/view41.php");
    }
    public static function exibirResultado(){
        $x = $_POST['valor1'];
        $y = $_POST['valor2'];
        
        require_once("../src/view/view41.php");
    }
}