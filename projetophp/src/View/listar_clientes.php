<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Clientes</title>
  </head>

  <body>
    <?php require_once "barra_navegacao.php";?>
    <div class="container">
        <h1>Clientes</h1>
        <!--Coloração dos botões de erro e sucesso e botão pra fechá-los-->
        <?php 
            if (isset($resposta)){
                if ($resposta){
                echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Registro inserido com sucesso!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
            } else {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Erro ao inserir o registro!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                }   
            }    
        ?>

        <!--table-->
        <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Ações</th>
            </tr>
        </thead>

        <tbody>

            <?php while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){ ?>

            <tr>
                <th scope="row">    <?= $linha['id'] ?>      </th>
                <td>                <?= $linha['nome'] ?>    </td>
                <td>                <?= $linha['email'] ?>      </td>
                <td>    <a href="/cliente/alterar/<?= $linha['id'] ?>" class="btn btn-warning">        Alterar</a> </td>
                <td>    <a href="/cliente/excluir/<?= $linha['id'] ?>" class="btn btn-danger">         Excluir</a> </td>
            </tr>

            <?php } ?>

        </tbody>
        </table>

    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   
  </body>
</html>