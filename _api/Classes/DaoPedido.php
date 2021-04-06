<?php
namespace _api\Classes;

Class DaoPedido
{
    public function create(Class_Pedido $p){

        $sql = 'INSERT INTO `tb_pedido` (`cd_pedido`, `ds_status`, `cd_material`, `cd_RA`) VALUES (NULL, "1", ?, ?)';

        $stmt = Conexao::getConn()->prepare($sql);
        //$stmt->bindValue(1, $p->getStatus());
        $stmt->bindValue(1, $p->getMaterial());
        $stmt->bindValue(2, $p->getRa());
        $stmt->execute();
    }

    public function read(Class_Pedido $p){

        $sql = 'SELECT * FROM tb_pedido WHERE cd_RA = ? && cd_material = ?';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getRa());
        $stmt->bindValue(2, $p->getMaterial());
        $stmt->execute();

        if($stmt->rowCount() > 0):
            $resultado = true;
            return $resultado;
        else:
            $resultado = false;
            return $resultado;
        endif;
    }

    public function readPedidos(Class_Pedido $p){

        $sql = 'SELECT tb_aluno.nm_aluno, tb_material.nm_material, tb_pedido.ds_status FROM tb_pedido LEFT JOIN tb_aluno ON tb_aluno.cd_RA = tb_pedido.cd_RA LEFT JOIN tb_material ON tb_pedido.cd_material = tb_material.cd_material WHERE tb_pedido.cd_RA = ? ';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getRa());
        $stmt->execute();

        if($stmt->rowCount() > 0):
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        else:
            return []; 
        endif;
    }
}

?>