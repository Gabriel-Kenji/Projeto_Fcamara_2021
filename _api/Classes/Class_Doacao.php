<?php
namespace _api\Classes;
class Class_Doacao{
    private $doacao, $CPF, $status, $pedido;

    public function getDoacao(){
        return $this->doacao;
    }

    public function setDoacao($doacao){
        $this->doacao = $doacao;
    }

    public function getCPF(){
        return $this->CPF;
    }

    public function setCPF($CPF){
        $this->CPF = $CPF;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setStatus($status){
        $this->status = $status;
    }

    public function getPedido(){
        return $this->pedido;
    }

    public function setPedido($pedido){
        $this->pedido = $pedido;
    }
}

?>