<?php

namespace Aluno\projetophp\Model\DAO;

use Aluno\projetophp\Model\Entity\Produtos;

class ProdutosDAO{
    public function inserir(Produtos $pr){
        try{
            $sql = "INSERT INTO `produtos`( `nome`, `descricao`, `valor`) VALUES (:nome, :descricao, :valor)";
            $p = Conexao::conectar()->prepare($sql);
            $p->bindValue(":nome",$pr->getNome());
            $p->bindValue(":descricao",$pr->getDescricao());
            $p->bindValue(":valor",$pr->getValor());
            $p->execute();
            return $p->fetch();
        } catch(\Exception $e){
            return false;
        }
    }

    public function alterar(Produtos $pr){
        try{
            $sql = "UPDATE `produtos` SET `nome`= :nome,`descricao`= :descricao,`valor`=:valor WHERE id = :id";
            $p = Conexao::conectar()->prepare($sql);
            $p->bindValue(":nome",$pr->getNome());
            $p->bindValue(":descricao",$pr->getDescricao());
            $p->bindValue(":valor",$pr->getValor());
            $p->bindValue(":id",$pr->getId());
            return $p->execute();

        } catch(\Exception $e){
            return false;
        }
    }
    

    public function excluir($id){
        try{
            $sql = "DELETE FROM `clientes` WHERE id = :id";
            $p = Conexao::conectar()->prepare($sql);
            $p->bindValue(":id", $id);
            return $p->execute();
        } catch(\Exception $e){
            return false;
        }
    }


    public function consultar(){
        try{
            $sql = "SELECT * FROM clientes";
            return Conexao::conectar()->query($sql);

        } catch(\Exception $e){
            return false;
        }
    }


    public function consultarPorId($id){
        try{
            $sql = "SELECT * FROM clientes WHERE id = :id";
            $p = Conexao::conectar()->prepare($sql);
            $p->bindValue(":id", $id);
            return $p->execute();

        } catch(\Exception $e){
            return false;
        }
    }
}