<?php
namespace _api\Classes;
class Class_Doacao{
    private $doacao, $CPF, $status, $pedidomaterial, $quantidade;

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

    public function getPedidoMaterial(){
        return $this->pedidomaterial;
    }

    public function setPedidoMaterial($pedidomaterial){
        $this->pedidomaterial = $pedidomaterial;
    }

    public function getQuantidade(){
        return $this->quantidade;
    }

    public function setQuantidade($quantidade){
        $this->quantidade = $quantidade;
    }
}

?>