<?php
namespace _api\Classes;

class DaoCadastro{

    public function create(Class_Usuario $p){
        $sql = 'INSERT INTO tb_usuario (cd_usuario, nm_usuario, nm_senha, nm_email) VALUES (Null, ?, ?, ?)';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getNome());
        $stmt->bindValue(2, $p->getSenha());
        $stmt->bindValue(3, $p->getEmail());
        $stmt->execute();
    }

    public function read(Class_Usuario $p){

        $sql = 'SELECT * From tb_usuario WHERE nm_email = ?';

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