<?php
namespace _api\Classes;
class Class_Pedido{
    private $id_pedido, $ra, $status, $material;

    public function get_IdPedido(){
        return $this->id_pedido;
    }

    public function setIdPedido($id_pedido){
        $this->id_pedido = $id_pedido;
    }
    
    public function getRa(){
        return $this->ra;
    }

    public function setRa($ra){
        $this->ra = $ra;
    }

}

?>
