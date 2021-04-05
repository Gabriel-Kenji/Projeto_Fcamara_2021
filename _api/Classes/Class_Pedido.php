<?php
namespace _api\Classes;
class Class_Pedido{
    private $pedido, $ra;

    public function getPedido(){
        return $this->pedido;
    }

    public function setPedido($pedido){
        $this->pedido = $pedido;
    }
    
    public function getRa(){
        return $this->ra;
    }

    public function setRa($ra){
        $this->ra = $ra;
    }

}

?>