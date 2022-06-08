<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Exercicio 4</title>
  </head>
  <body class="container">
    <h1>Exercicio 4</h1>
    <form method="POST" action="/exercicio5">
        <div>
            <div class="row">
                <div class="col">
                <label for="valor1" class="label-control">
                    Informe o valor 1:
                </label>
                <input type="number" name="valor1" 
                    id="valor1" class="form-control"/>
                </div>
                
                <div class="col">
                <label for="valor2" class="label-control">
                    Informe o valor 2:
                </label>
                <input type="number" name="valor2" 
                    id="valor2" class="form-control"/>
                </div>
                
                <div class="col">
                <label for="valor3" class="label-control">
                    Informe o valor 3:
                </label>
                <input type="number" name="valor3" 
                    id="valor3" class="form-control"/>
                </div>
                <div class="col">
                <label for="valor4" class="label-control">
                    Informe o valor 4:
                </label>
                <input type="number" name="valor4" 
                    id="valor4" class="form-control"/>
                </div>
                
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary">Ok</button>
                </div>
            </div>
            <br>
        </div>
    </form>
    <div>
    <?php
        if (isset($media)){
        ?>
       <h5>Resposta</h5> 
        <?php
            echo "Sua média é: $media";
  
            if ($media > 7){
              echo "<br>";
              echo " Aprovado";
            }
            elseif ($media < 7){
                echo "<br>";
                echo " Reprovado";
            }
        }    
    ?>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>