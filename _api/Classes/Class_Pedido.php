<?php
namespace _api\Classes;
class Class_Pedido{
    private $pedido, $ra, $status, $material;

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

    public function getStatus(){
        return $this->status;
    }

    public function setStatus($status){
        $this->status = $status;
    }

    public function getMaterial(){
        return $this->material;
    }

    public function setMaterial($material){
        $this->material = $material;
    }

}

?>