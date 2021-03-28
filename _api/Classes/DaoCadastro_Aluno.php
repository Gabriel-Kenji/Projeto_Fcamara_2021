<?php
namespace _api\Classes;

class DaoCadastro_Aluno{

    public function create_sem_telefone(Class_Aluno $p){
        $sql = 'INSERT INTO tb_aluno (cd_RA, nm_aluno, nm_email, nm_senha, sg_estado, nm_cidade, nm_bairro, cd_INEP) VALUES (Null, ?, ?, ?, ?, ?, ?, ?)';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getNome());
        $stmt->bindValue(2, $p->getEmail());
        $stmt->bindValue(3, $p->getSenha());
        $stmt->bindValue(4, $p->getEstado());
        $stmt->bindValue(5, $p->getCidade());
        $stmt->bindValue(6, $p->getBairro());
        $stmt->bindValue(7, $p->getInep()); 
        $stmt->execute();
    }

    public function create_com_telefone(Class_Aluno $p){
        $sql = 'INSERT INTO tb_aluno (cd_RA, nm_aluno, nm_email, nm_senha, sg_estado, nm_cidade, nm_bairro, ds_telefone, cd_INEP) VALUES (Null, ?, ?, ?, ?, ?, ?, ?, ?)';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getNome());
        $stmt->bindValue(2, $p->getEmail());
        $stmt->bindValue(3, $p->getSenha());
        $stmt->bindValue(4, $p->getEstado());
        $stmt->bindValue(5, $p->getCidade());
        $stmt->bindValue(6, $p->getBairro());
        $stmt->bindValue(7, $p->getTelefone());
        $stmt->bindValue(8, $p->getInep()); 

        $stmt->execute();
    }

    public function read(Class_Aluno $p){

        $sql = 'SELECT * From tb_aluno WHERE nm_email = ?';

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