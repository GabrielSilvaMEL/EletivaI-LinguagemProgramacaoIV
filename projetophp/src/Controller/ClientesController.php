<?php


namespace Aluno\projetophp\Controller;

use Aluno\projetophp\Model\DAO\ClientesDAO;
use Aluno\projetophp\Model\Entity\Clientes;

class ClientesController{

    public static function abrirFormularioInserir(){
        require_once "../src/View/inserir_cliente.php";
    }

    //View-listarclientes
    public static function abrirListaClientes(){
        $dao = new ClientesDAO();
        $resultado = $dao->consultar();
        require_once "../src/View/listar_clientes.php";
    }

    public static function inserirCliente(){
        $cliente = new Clientes();
        $cliente->setEmail($_POST["email"]);
        $cliente->setIdade($_POST["idade"]);
        $cliente->setNome($_POST["nome"]);
        $dao = new ClientesDAO();
        if ($dao->inserir($cliente)){
            $resposta = true;          
        } else {
            $resposta = false;
        }
        ClientesController::abrirListaClientes();
        require_once "../src/View/listar_clientes.php";
    }
}