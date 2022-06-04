<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Exercicio 2</title>
  </head>
  <body class="container">
    <h1>Exercicio 2</h1>
    <form method="POST" action="/exercicio2">
        <div class="row">
            <div class="col">
                <label class="label-control">Insira o valor do kilo: </label>
                <input class="form-control" name="valor1" type="text"></input>
            </div>
            <div class="col">
                <label class="label-control">Informe a quantidade de quilos consumidos:</label>
                <input class="form-control" name="valor2" type="text"></input>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">Ok</button>
            </div>
        </div>
    </form>
    <div>
    <?php
        if (isset($valorfinal)){
        ?>
       <h5>Resposta</h5> 
        <?php
            echo "O valor do kilo é: $valorkg e a quantia consumida é $consumido <br>";
            echo "O valor total é: $valorfinal";     
        }    
    ?>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>