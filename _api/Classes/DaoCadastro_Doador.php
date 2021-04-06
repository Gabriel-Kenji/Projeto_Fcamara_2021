<?php
namespace _api\Classes;

class DaoCadastro_Doador{

    public function create_sem_telefone(Class_Doador $p){
        $sql = 'INSERT INTO tb_doador (cd_CPF, nm_doador, nm_email, nm_senha, sg_estado, nm_cidade, nm_bairro) VALUES (?, ?, ?, ?, ?, ?, ?)';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getCPF());
        $stmt->bindValue(2, $p->getNome());
        $stmt->bindValue(3, $p->getEmail());
        $stmt->bindValue(4, $p->getSenha());
        $stmt->bindValue(5, $p->getEstado());
        $stmt->bindValue(6, $p->getCidade());
        $stmt->bindValue(7, $p->getBairro());
        $stmt->execute();
    }

    public function create_com_telefone(Class_Doador $p){
        $sql = 'INSERT INTO tb_doador (cd_CPF, nm_doador, nm_email, nm_senha,  sg_estado, nm_cidade, nm_bairro, ds_telefone) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getCPF());
        $stmt->bindValue(2, $p->getNome());
        $stmt->bindValue(3, $p->getEmail());
        $stmt->bindValue(4, $p->getSenha());
        $stmt->bindValue(5, $p->getEstado());
        $stmt->bindValue(6, $p->getCidade());
        $stmt->bindValue(7, $p->getBairro());
        $stmt->bindValue(8, $p->getTelefone());
        $stmt->execute();
    }

    public function read(Class_Doador $p){

        $sql = 'SELECT * From tb_doador WHERE nm_email = ? or cd_CPF = ?';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getEmail());
        $stmt->bindValue(2, $p->getCPF());
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