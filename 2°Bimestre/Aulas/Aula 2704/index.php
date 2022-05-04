<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Orientação a objetos PHP</title>
  </head>

  <body>
    <?php

        require_once("Impressora.php");
        require_once("Matricial.php");
        require_once("Laser.php");

        $impressora = new Impressora();
        $impressora->setMarca("Classe Impressora!");

        $matricial = new Matricial("HP", "01",10, true, true, 10);
        var_dump($impressora);
        echo "<br>";
        var_dump($matricial);

    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>