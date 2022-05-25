<?php
    use Aluno\projetophp\Controller\ExercicioController;
    require_once __DIR__.'/vendor/autoload.php';

    //Aqui a gente recupera o que o usuário digitou e qual método HTTP ele utilizou.
    $method = $_SERVER['REQUEST_METHOD'];
    $path = $_SERVER['PATH_INFO']; // recebe o que o usuário digitou

    //instanciar classe Router
    $router = new \Aluno\projetophp\Router($method, $path);

    //ADICIONAR AS ROTAS VÁLIDAS ABAIXO
    $router->get('/ola-mundo',function(){
        return "Olá Mundo!";
    });

    $router->get('/exemplo',
    'Aluno\projetophp\Controller\ExercicioController::exibir');


    $router->post("/exemplo-resultado", 
    'Aluno\projetophp\Controller\ExercicioController::exibirResultado');

    ///////ROTAS CLIENTE
    $router->get("/cliente/novo",
    "Aluno\projetophp\Controller\ClientesController::abrirFormularioInserir");

    $router->post("/cliente/inserir", 'Aluno\projetophp\Controller\ClientesController::inserirCliente');

    //Vai até o controller ler o método de mostrar os clientes em lista
    $router->get("/clientes",
    "Aluno\projetophp\Controller\ClientesController::abrirListaClientes"); 
    ///////////////////////////


    //ADICIONAR AS ROTAS VÁLIDAS ACIMA

    $result = $router->handler(); //o handler verifica se ta escrito correto com caracteres validos. caso não exista o result devolve true ou false
    if (!$result){
        http_response_code(404);
        echo "Página não encontrada.";
        die();
    }
    echo $result($router->getParams());
?>