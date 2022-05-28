<?php


namespace Aluno\projetophp\Controller;

use Aluno\projetophp\Model\DAO\ClientesDAO;
use Aluno\projetophp\Model\Entity\Clientes;

class ClientesController{

    public static function abrirFormularioInserir(){
        require_once "../src/View/inserir_cliente.php";
    }

    public static function abrirFormularioAlterar($params){
        $dao = new ClientesDAO();
        $resultado = $dao->consultarPorId($params[1]);
        require_once "../src/View/alterar_cliente.php";
    }

    //View-listarclientes
    public static function abrirListaClientes(){
        $dao = new ClientesDAO();
        $resultado = $dao->consultar();
        require_once "../src/View/listar_clientes.php";
    }

    //INSERT CLIENT
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
    }

    //EDIT CLIENT
    public static function editarCliente($params){
        $cliente = new Clientes();
        $cliente->setEmail($_POST["email"]);
        $cliente->setIdade($_POST["idade"]);
        $cliente->setNome($_POST["nome"]);
        $cliente->setId($params[1]);
        $dao = new ClientesDAO();
        if ($dao->alterar($cliente)){
            $resposta = true;          
        } else {
            $resposta = false;
        }
        ClientesController::abrirListaClientes();
    }

    //DELETE CLIENT
    public static function excluirCliente($params){
        $dao = new ClientesDAO();
        if ($dao->excluir($params[1])){
            $resposta = true;          
        } else {
            $resposta = false;
        }
        ClientesController::abrirListaClientes();
    }
}