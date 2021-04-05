<?php
    session_start();
    require __DIR__ . "/../vendor/autoload.php";

    $userDoacao = new \_api\Classes\Class_Doacao();
    $userPedido = new \_api\Classes\Class_Pedido();
    $DaoDoacao = new \_api\Classes\DaoDoacao();
    $PedidoDao = new \_api\Classes\DaoPedido();

    
    $CPF = $_SESSION['Doador'];
    $userDoacao->setCPF($CPF);
    $DaoDoacao->createDoacao($userDoacao);
    $cont = 1;
    $DaoDoacao->readDoacao($userDoacao);
    foreach($DaoDoacao->readDoacao($userDoacao) as $doacoa){
        if($DaoDoacao->readDoacaoCont($userDoacao) == $cont)
        {
            $codigo_doacao = $doacoa["cd_doacao"];
            $userDoacao->setDoacao($codigo_doacao);    
        }
        $cont++;
    }

    $userPedido->setPedido($_SESSION['id_pedido']);
    foreach($PedidoDao->readPedidosAluno($userPedido) as $pedido){?>
        <?php $item = "item".$pedido['cd_material'];                  
        if(isset($_POST[$item]) && !empty($_POST[$item])){
            $quantidade = $_POST[$item];
            $userPedido->setMaterial($pedido['cd_material']);
            $DaoDoacao->readPedidosMaterial($userPedido);
            foreach($DaoDoacao->readPedidosMaterial($userPedido) as $pedidoMaterial){
                $pedido_Material = $pedidoMaterial['cd_pedido_material'];
            }
            $userDoacao->setPedidoMaterial($pedido_Material);
            $userDoacao->setQuantidade($quantidade);
            $DaoDoacao->createDoacaoMaterial($userDoacao);
            header("Location: ../dashboard-doador.php");
        }
                
    }   


?>