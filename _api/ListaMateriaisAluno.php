<?php
    session_start();
    require __DIR__ . "/../vendor/autoload.php";
    $user = new \_api\Classes\Class_Pedido();
    $pedidoDao = new \_api\Classes\DaoPedido();

    $user->setPedido($_SESSION['id_pedido']);
    $pedidoDao->readPedidos($user);
    $cont = 0;
    foreach($pedidoDao->readPedidosAluno($user) as $pedido){?>
        <tr>
            <td><?php echo $pedido['nm_material']; ?></td>
             <?php $item = "item".$pedido['cd_material']; ?>                 
            <td>
                <div class="buttons">
                    <button onclick="subtraiQnt('<?php echo $item ?>')">-</button>
                    <input type="text" name="<?php echo $item ?>" id="<?php echo $item ?>" value="0">
                    <button onclick="somaQnt('<?php echo $item ?>')">+</button>
                </div>
            </td>
                                
        </tr>
                
    <?php $cont++;
    }   ?>     
