<?php


namespace Aluno\projetophp\Controller;


class ExercicioController
{
    public static function exibir(){
        require_once("../src/view/exemplo.php");
    }
    public static function exibirResultado(){
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $soma = $valor1 + $valor2;
        require_once("../src/view/exemplo.php");
    }
}