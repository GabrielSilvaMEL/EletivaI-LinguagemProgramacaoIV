<?php

namespace Aluno\projetophp\Model\DAO;

use Aluno\projetophp\Model\Entity\Clientes;

class ClientesDAO{

    public function inserir(Clientes $c){
        try{
            $sql = "INSERT INTO `clientes`( `nome`, `email`, `idade`) VALUES (:nome, :email, :idade)";


        } catch(\Exception $e){
            return false;
        }
    }


    public function alterar(Clientes $c){
        try{
            $sql = "UPDATE `clientes` SET `nome`= :nome,`email`= :email,`idade`=:idade WHERE id = :id";
            

        } catch(\Exception $e){
            return false;
        }
    }
    

    public function excluir($id){
        $sql = "DELETE FROM `clientes` WHERE id = :id";
    }


    public function consultar(){
        try{
            $sql = "SELECT * FROM clientes";
            

        } catch(\Exception $e){
            return false;
        }
    }


    public function consultarPorId($id){
        try{
            $sql = "SELECT * FROM clientes WHERE id = :id";
            

        } catch(\Exception $e){
            return false;
        }
    }

}