<?php
namespace _api\Classes;

Class DaoCep
{
    public function read(Class_Escola $p){

        //puxando dados do banco
        $sql = 'SELECT * From tb_escolas WHERE nm_cidade = ? and sg_uf = ?';

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
?>