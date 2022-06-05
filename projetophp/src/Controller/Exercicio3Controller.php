<?php


namespace Aluno\projetophp\Controller;


class Exercicio3Controller
{
    public static function exibir(){
        require_once("../src/view/exercicio3.php");
    }
    public static function exibirResultado(){
        $valor = $_POST['valor'];

        if ($valor > 10)
        {
            echo "Seu valor é $valor e ele é maior que 10";
        }
        elseif ($valor == 10){
            echo "Seu valor é 10";
        }
        elseif ($valor < 10){
            echo "Seu valor é $valor e ele é menor que 10";
        require_once("../src/view/exercicio3.php");
        }
    }

}