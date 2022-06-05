<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Exercicio 3</title>
  </head>
  <body class="container">
    <h1>Exercicio 3</h1>
    <form method="POST" action="/exercicio3">
        <div class="row">
            <div class="col">
                <label class="label-control">Insira o valor: </label>
                <input class="form-control" name="valor1" type="text"></input>
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
        if (isset($valor)){
        ?>
       <h5>Resposta</h5> 
        <?php
            if ($valor > 10)
            {
                echo "Seu valor é $valor e ele é maior que 10";
            }
            elseif ($valor == 10){
                echo "Seu valor é 10";
            }
            elseif ($valor < 10){
                echo "Seu valor é $valor e ele é menor que 10";    
            }
        }    
    ?>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>