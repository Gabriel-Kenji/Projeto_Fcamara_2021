<?php
namespace _api\Classes;

Class DaoMaterial
{
    public function read(){

        //puxando dados do banco
        $sql = 'SELECT * From tb_material';

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
?>