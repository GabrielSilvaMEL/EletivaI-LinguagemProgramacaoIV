<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>exercicio 5</title>
  </head>
  <body>
    <h1>exercicio 5</h1>

    <?php
      $altura = $_POST['altura'];
      $peso = $_POST['peso'];

      function imc($altura, $peso){
      $imc = $peso / $altura;
      
      if ($imc < 18.65){
        echo "Você está abaixo do peso";
      } elseif(18.66 >= $imc && 24.9< $imc){
        echo "Peso ideal (parabéns)";
      }
      elseif (25 >= $imc && 29.9 < $imc){
        echo "Levemente acima do peso";
      }
      elseif (30 >= $imc && 34.9 < $imc){
        echo "Obesidade grau 1";
      }
      elseif (35 >= $imc && 39.9 < $imc){
        echo "Obesidade grau 2 (severa)";
      }
      elseif ($imc > 40){
        echo "Obesidade 3 (mórbida)";
      }
      return $imc;
      }

      $imc = imc($altura, $peso);
      
      echo "Seu IMC é: $imc";
      
 
    ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>