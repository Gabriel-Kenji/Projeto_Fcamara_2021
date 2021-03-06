<?php
namespace _api\Classes;

Class DaoLogin_Doador
{
    public function read(Class_Doador $p){

        //puxando dados do banco
        $sql = 'SELECT * From tb_doador WHERE nm_email = ?';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getEmail());
        $stmt->execute();

        if($stmt->rowCount() > 0):
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        else:
            return []; 
         endif;            
       
    }       
    

    public function readCPF(Class_Doador $p){

        //puxando dados do banco
        $sql = 'SELECT * From tb_doador WHERE cd_CPF = ?';

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