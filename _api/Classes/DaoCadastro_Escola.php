<?php
namespace _api\Classes;

class DaoCadastro_Escola{

    public function create_sem_telefone(Class_Escola $p){
        $sql = 'INSERT INTO tb_escola (cd_INEP, nm_escola, nm_email, nm_senha, sg_estado, nm_cidade, nm_bairro) VALUES (?, ?, ?, ?, ?, ?, ?)';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getInep());
        $stmt->bindValue(2, $p->getNome());
        $stmt->bindValue(3, $p->getEmail());
        $stmt->bindValue(4, $p->getSenha());
        $stmt->bindValue(5, $p->getEstado());
        $stmt->bindValue(6, $p->getCidade());
        $stmt->bindValue(7, $p->getBairro());
        $stmt->execute();
    }

    public function create_com_telefone(Class_Escola $p){
        $sql = 'INSERT INTO tb_escola (cd_INEP, nm_escola, nm_email, nm_senha, sg_estado, nm_cidade, nm_bairro, ds_telefone) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getInep());
        $stmt->bindValue(2, $p->getNome());
        $stmt->bindValue(3, $p->getEmail());
        $stmt->bindValue(4, $p->getSenha());
        $stmt->bindValue(5, $p->getEstado());
        $stmt->bindValue(6, $p->getCidade());
        $stmt->bindValue(7, $p->getBairro());
        $stmt->bindValue(8, $p->getTelefone());
        $stmt->execute();
    }

    public function read(Class_Escola $p){

        $sql = 'SELECT * From tb_escola WHERE nm_email = ?';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getEmail());
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

?>