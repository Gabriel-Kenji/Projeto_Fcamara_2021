<?php
require __DIR__ . "/../vendor/autoload.php";
$user = new \_api\Classes\Class_Pedido();
$ra = $_POST['ra'];

$user->setRa($ra);

$PedidoDao = new \_api\Classes\DaoPedido();

$PedidoDao->readPedidos($user);

foreach($PedidoDao->readPedidos($user) as $pedido):
    echo "PEDIDO </br>";
    echo $pedido['nm_aluno']."</br>";
    echo $pedido['nm_material']."</br>";
    echo $pedido['ds_status']."</br>";
endforeach;

?>