<?php


namespace Aluno\projetophp\Controller;


class Exercicio2Controller
{
    public static function exibir(){
        require_once("../src/view/exercicio2.php");
    }
    public static function exibirResultado(){
        $valorkg = $_POST['valor1'];
        $consumido = $_POST['valor2'];
        $valorfinal = $valorkg * $consumido;
        require_once("../src/view/exercicio2.php");
    }
}