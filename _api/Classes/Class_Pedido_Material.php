<?php
namespace _api\Classes;
class Class_Pedido_Material{
    private $pedido_material, $pedido, $status, $material, $quantidade;

    public function getPedidoMaterial(){
        return $this->pedido_material;
    }

    public function setPedidoMaterial($pedido_material){
        $this->pedido_material = $pedido_material;
    }
    
    public function getPedido(){
        return $this->pedido;
    }

    public function setPedido($pedido){
        $this->pedido = $pedido;
    }

    public function getMaterial(){
        return $this->material;
    }

    public function setMaterial($material){
        $this->material = $material;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setStatus($status){
        $this->status = $status;
    }


    public function getQuantidade(){
        return $this->quantidade;
    }

    public function setQuantidade($quantidade){
        $this->quantidade = $quantidade;
    }



}

?>

