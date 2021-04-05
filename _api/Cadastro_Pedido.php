<?php
require __DIR__ . "/../vendor/autoload.php";
session_start();

$userPedido = new \_api\Classes\Class_Pedido();
$DaoPedido = new \_api\Classes\DaoPedido();
$PedidoDao = new \_api\Classes\DaoPedido();
$MaterialDao = new \_api\Classes\DaoMaterial();
$PedidoMaterial = new \_api\Classes\Class_Pedido_Material(); 

$ra = $_SESSION['RaAluno'];
$userPedido->setRa($ra);
$DaoPedido->createPedido($userPedido);
$cont = 1;
$DaoPedido->readPedido($userPedido);
foreach($DaoPedido->readPedido($userPedido) as $pedidu){
    if($DaoPedido->readPedidoCont($userPedido) == $cont)
    {
        $codigo_pedido = $pedidu["cd_pedido"];
        $userPedido->setPedido($codigo_pedido);
        echo $codigo_pedido;
    }
    $cont++;
}

$userPedido->setPedido($codigo_pedido);
$contz = 1;
foreach($MaterialDao->read() as $material){
    $item = 'material'.$contz;
    if(isset($_POST[$item]) && !empty($_POST[$item])){
        $quantidade = $_POST[$item];
        $PedidoMaterial->setMaterial($contz);
        $PedidoMaterial->setPedido($codigo_pedido);
        $PedidoMaterial->setQuantidade($quantidade);
        $PedidoDao->createPedidoMaterial($PedidoMaterial);


    }
    $contz++;

}


?>