    <?php

    namespace Aluno\projetophp\Controller\L1\Ex1;
      
    Class Resposta{
      $valor1 = $_POST['valor1'];
      $valor2 = $_POST['valor2'];
      echo "Valor 1 é:  $valor1 e Valor 2 é:  $valor2";
      echo "<br/>";
      echo "Soma: ".($valor1 + $valor2);
      echo "Subtração: ".($valor1 - $valor2);
      echo "Multiplicação: ".($valor1 * $valor2);
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

      $i = 10;

      echo "<br/>";

      echo "Valor de i:".(3 * ++$i);
      
      echo "<br/>";

      echo "Valor de i:".($i);
    }

    ?>
