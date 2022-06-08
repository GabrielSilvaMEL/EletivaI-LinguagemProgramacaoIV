<?php


namespace Aluno\projetophp\Controller;


class Exercicio3Controller
{
    public static function exibir(){
        require_once("../src/view/exercicio3.php");
    }
    public static function exibirResultado(){
        $valor = $_POST['valor1'];      
        require_once("../src/view/exercicio3.php");
    }
}
