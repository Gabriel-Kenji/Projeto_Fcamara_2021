<?php
namespace _api\Classes;
class Class_Pedido{
    private $id_status, $nome;

    public function getIdStatus(){
        return $this->id_status;
    }

    public function setIdStatus($id_status){
        $this->id_status = $id_status;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

}

?>

