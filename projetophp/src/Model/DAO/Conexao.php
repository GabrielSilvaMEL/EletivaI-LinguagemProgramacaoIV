<?php
namespace Aluno\projetophp\Model\DAO;

class Conexao{

    public static function conectar(){
        return 
        new PDO("mysql:host=localhost; dbname=projetophp", "root", "");
    }
}