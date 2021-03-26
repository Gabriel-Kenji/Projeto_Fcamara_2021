<?php
namespace _api\Classes;

Class DaoEscola{

    public function create(Class_Escolas $p){
        $sql = 'INSERT INTO tb_escolas (cd_escolas, nm_escola, nm_endereco, nm_bairro, nm_cidade, sg_uf, cd_cep) VALUES (?, ?, ?, ?, ?, ?, ?)';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getId());
        $stmt->bindValue(2, $p->getNome());
        $stmt->bindValue(3, $p->getEndereco());
        $stmt->bindValue(4, $p->getBairro());
        $stmt->bindValue(5, $p->getCidade());
        $stmt->bindValue(6, $p->getUf());
        $stmt->bindValue(7, $p->getCep());
        $stmt->execute();
    }

    public function read(Class_Escolas $p){

        $sql = 'SELECT * From tb_escolas WHERE cd_escolas = ?';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getId());
        $stmt->execute();

        if($stmt->rowCount() > 0):
            $resultado = true;
            return $resultado;
        else:
            $resultado = false;
            return $resultado;
        endif;            
    }
}