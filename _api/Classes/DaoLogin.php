<?php
namespace _api\Classes;

Class DaoLogin
{
    public function read(Class_Usuario $p){

        //puxando dados do banco
        $sql = 'SELECT * From tb_usuario WHERE nm_email = ?';

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
    
}
?>