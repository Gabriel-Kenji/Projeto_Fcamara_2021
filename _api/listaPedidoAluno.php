<?php

require __DIR__ . "/../vendor/autoload.php";

$userPedido = new \_api\Classes\Class_Pedido();
$DaoPedido = new \_api\Classes\DaoPedido();

$ra = $_SESSION['RaAluno'];
$userPedido->setRa($ra);
$DaoPedido->readListaPedidos($userPedido);
foreach($DaoPedido->readListaPedidos($userPedido) as $pedido){?>
    <tr style="height: 53px;">
        <td class="u-table-cell"><?php echo $pedido['nm_material']; ?></td>
        <td class="u-table-cell"><?php echo $pedido['ds_quantidade']; ?></td>
    </tr>

<?php 
}
?>