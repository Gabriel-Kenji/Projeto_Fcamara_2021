<?php
require __DIR__ . "/../vendor/autoload.php";
session_start();

$userPedido = new \_api\Classes\Class_Pedido();
$DaoPedido = new \_api\Classes\DaoPedido();
$PedidoDao = new \_api\Classes\DaoPedido();

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
    }
    $cont++;
}
 