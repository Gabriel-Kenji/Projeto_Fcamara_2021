<?php
namespace _api\Classes;
class Class_Pedido_Material{
    private $pedido_material, $id_pedido, $id_status, $material, $quantidade;

    public function getPedidoMaterial(){
        return $this->pedido_material;
    }

    public function setPedidoMaterial($pedido_material){
        $this->pedido_material = $pedido_material;
    }
    
    public function get_IdPedido(){
        return $this->id_pedido;
    }

    public function setIdPedido($id_pedido){
        $this->id_pedido = $id_pedido;
    }

    public function getMaterial(){
        return $this->material;
    }

    public function setMaterial($material){
        $this->material = $material;
    }

    public function getIdStatus(){
        return $this->id_status;
    }

    public function setIdStatus($id_status){
        $this->id_status = $id_status;
    }


    public function getQuantidade(){
        return $this->quantidade;
    }

    public function setQuantidade($quantidade){
        $this->quantidade = $quantidade;
    }



}

?>

