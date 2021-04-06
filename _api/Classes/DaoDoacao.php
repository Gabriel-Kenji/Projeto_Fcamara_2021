<?php
namespace _api\Classes;

Class DaoDoacao
{
    public function createDoacao(Class_Doacao $p){
        $sql = 'INSERT INTO `tb_doacao` (`cd_doacao`, `cd_status`, `cd_CPF`) VALUES (NULL, "1" , ?);';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getCPF());
        $stmt->execute();
    }

    public function createDoacaoMaterial(Class_Doacao $p){
        $sql = 'INSERT INTO `tb_doacao_material` (`cd_pedido_material`, `cd_doacao`, `ds_quantidade`) VALUES (?, ?, ?)';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getPedidoMaterial());
        $stmt->bindValue(2, $p->getDoacao());
        $stmt->bindValue(3, $p->getQuantidade());
        $stmt->execute();
    }

    public function readDoacao(Class_Doacao $p){

        //puxando dados do banco
        $sql = 'SELECT * FROM tb_doacao LEFT JOIN tb_doador ON tb_doador.cd_CPF = tb_doacao.cd_CPF WHERE tb_doacao.cd_CPF = ? ';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getCPF());
        $stmt->execute();

        if($stmt->rowCount() > 0):
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        else:
            return []; 
         endif;            
       
    }
    
    public function readDoacaoCont(Class_Doacao $p){

        $sql = 'SELECT * FROM tb_doacao LEFT JOIN tb_doador ON tb_doador.cd_CPF = tb_doacao.cd_CPF WHERE tb_doacao.cd_CPF = ? ';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getCPF());
        $stmt->execute();

        if($stmt->rowCount() > 0):
            $resultado = $stmt->rowCount();
            return $resultado;
        else:
            return []; 
         endif;            
    }

    public function readPedidosMaterial(Class_Pedido $p){

        $sql = 'SELECT * FROM tb_pedido_material WHERE cd_pedido = ? AND cd_material = ? ';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getPedido());
        $stmt->bindValue(2, $p->getMaterial());
        $stmt->execute();

        if($stmt->rowCount() > 0):
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        else:
            return []; 
        endif;
    }

    public function readListaPedidos(Class_Doacao $p){

        $sql = 'SELECT tb_material.nm_material, tb_doacao_material.ds_quantidade, tb_escola.nm_escola FROM `tb_doacao_material` LEFT JOIN `tb_doacao` ON `tb_doacao_material`.`cd_doacao` = `tb_doacao`.`cd_doacao` LEFT JOIN `tb_doador` ON `tb_doacao`.`cd_CPF` = `tb_doador`.`cd_CPF` LEFT JOIN `tb_pedido_material` ON `tb_doacao_material`.`cd_pedido_material` = `tb_pedido_material`.`cd_pedido_material` LEFT JOIN `tb_material` ON `tb_pedido_material`.`cd_material` = `tb_material`.`cd_material` LEFT JOIN `tb_pedido` ON `tb_pedido_material`.`cd_pedido` = `tb_pedido`.`cd_pedido` LEFT JOIN `tb_aluno` ON `tb_pedido`.`cd_RA` = `tb_aluno`.`cd_RA` LEFT JOIN `tb_escola` ON `tb_aluno`.`cd_INEP` = `tb_escola`.`cd_INEP` WHERE tb_doador.cd_CPF = ? ';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getCPF());
        $stmt->execute();

        if($stmt->rowCount() > 0):
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        else:
            return []; 
        endif;
    }

    public function readListaDoacaoEscola(Class_Doacao $p){

        $sql = 'SELECT * FROM `tb_doacao_material` LEFT JOIN `tb_doacao` ON `tb_doacao_material`.`cd_doacao` = `tb_doacao`.`cd_doacao` LEFT JOIN `tb_doador` ON `tb_doacao`.`cd_CPF` = `tb_doador`.`cd_CPF` LEFT JOIN `tb_pedido_material` ON `tb_doacao_material`.`cd_pedido_material` = `tb_pedido_material`.`cd_pedido_material` LEFT JOIN `tb_material` ON `tb_pedido_material`.`cd_material` = `tb_material`.`cd_material` LEFT JOIN `tb_pedido` ON `tb_pedido_material`.`cd_pedido` = `tb_pedido`.`cd_pedido` LEFT JOIN `tb_aluno` ON `tb_pedido`.`cd_RA` = `tb_aluno`.`cd_RA` LEFT JOIN `tb_escola` ON `tb_aluno`.`cd_INEP` = `tb_escola`.`cd_INEP` LEFT JOIN tb_status_doacao ON tb_status_doacao.cd_status = tb_pedido_material.cd_status WHERE tb_escola.cd_INEP = ? ';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getCPF());
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



 