<?php
namespace _api\Classes;

Class DaoAlunoEscola
{
    public function read(Class_Aluno $p){

        //puxando dados do banco
        $sql = 'SELECT * FROM tb_aluno WHERE cd_INEP = ?';
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
    
}
?>