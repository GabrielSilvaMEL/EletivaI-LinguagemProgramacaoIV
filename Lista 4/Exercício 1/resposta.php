<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Exercício 5</title>
  </head>
  <body>
    <h1>Exercício 5</h1>


    <?php

        for ($i=1; $i<=5; $i++){
            $array[$i] = $_POST["valor$i"];
        }

        function ordenar($array)
        {        
          $melhor_volta = 0;
          sort($array);
          foreach($array as $valor){
              if ($melhor_volta < $valor){
              $melhor_volta = $valor;
          }
        } 
        return $melhor_volta;     
        }

        function posicao($array)
        {        
          $melhor_volta = 0;
          $melhorposicao = 0;
          sort($array);
          foreach($array as $chave => $valor){
              if ($melhor_volta < $valor){
              $melhor_volta = $valor;
              $melhorposicao = $chave; // Nao consegui fazer a lógica de mostra em qual chave está a melhorposicao
          }
          return $melhorposicao;
        } 
        return $melhor_volta;     
        }


        posicao($array);
        ordenar($array);

        $melhor_posicao = posicao($array);
        $melhor_volta = ordenar($array);
        
        
        echo "A melhor volta é: $melhor_volta <br>";
        echo "Na posição $melhor_posicao <br>";
        var_dump($array);
    ?>

   







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>