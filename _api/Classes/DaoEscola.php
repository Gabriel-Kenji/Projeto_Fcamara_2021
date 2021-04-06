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
}