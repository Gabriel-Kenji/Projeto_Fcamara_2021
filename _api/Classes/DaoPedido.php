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

        $sql = 'SELECT tb_aluno.nm_aluno, tb_material.nm_material, tb_pedido_material.ds_quantidade FROM tb_pedido LEFT JOIN tb_aluno ON tb_aluno.cd_RA = tb_pedido.cd_RA LEFT JOIN tb_pedido_material ON tb_pedido_material.cd_pedido = tb_pedido_material.cd_pedido LEFT JOIN tb_material ON tb_pedido_material.cd_material = tb_material.cd_material WHERE tb_pedido.cd_RA = ?';

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

    public function readPedidosEscola(Class_Escola $p){

        $sql = 'SELECT * FROM tb_pedido LEFT JOIN tb_aluno ON tb_aluno.cd_RA = tb_pedido.cd_RA WHERE tb_aluno.cd_INEP =  ? ';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getInep());
        $stmt->execute();

        if($stmt->rowCount() > 0):
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        else:
            return []; 
        endif;
    }

    public function readPedidosModal(Class_Pedido $p){

        $sql = 'SELECT * FROM tb_pedido LEFT JOIN tb_pedido_material ON tb_pedido_material.cd_pedido = tb_pedido.cd_pedido LEFT JOIN tb_aluno ON tb_aluno.cd_RA = tb_pedido.cd_RA LEFT JOIN tb_escola ON tb_aluno.cd_INEP = tb_escola.cd_INEP WHERE tb_pedido.cd_pedido = ? ';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getPedido());
        $stmt->execute();

        if($stmt->rowCount() > 0):
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        else:
            return []; 
        endif;
    }

    public function readPedidosAluno(Class_Pedido $p){

        $sql = 'SELECT `tb_pedido_material`.*, `tb_material`.*  FROM `tb_pedido_material`LEFT JOIN `tb_material` ON `tb_pedido_material`.`cd_material` = `tb_material`.`cd_material` WHERE cd_pedido = ? ';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getPedido());
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