<?php


namespace Aluno\projetophp\Controller;


class Exercicio1Controller
{
    public static function exibir(){
        require_once("../src/view/exercicio1v.php");
    }
    public static function exibirResultado(){
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $soma = $valor1 + $valor2;

        if ($valor2 != 0){
            echo "Divisão: ".($valor1 / $valor2);
         } else {
           echo "Não é possível realizar divisão por 0!";
        }

        if ($valor1 % 2 == 0)
        echo "Valor 1 é par!";
        else 
            echo "Valor é impar!";

        $resultado = $valor1 % 2 == 0 ? "Valor 1 é par!" 
                    : "Valor 1 é impar";
        echo $resultado;

        require_once("../src/view/exercicio1v.php");
    }
}