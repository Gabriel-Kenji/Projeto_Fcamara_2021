<?php
namespace _api\Classes;

Class DaoEscola{

    public function readSelect(){

        $sql = 'SELECT * From tb_escola';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0):
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        else:
            return []; 
         endif;          
    }

    public function readSelectCidade(Class_Escola $p){

        $sql = 'SELECT * From tb_escola where nm_cidade = ? and sg_estado = ?';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getCidade());
        $stmt->bindValue(2, $p->getEstado());
        $stmt->execute();

        if($stmt->rowCount() > 0):
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        else:
            return []; 
         endif;          
    }
}