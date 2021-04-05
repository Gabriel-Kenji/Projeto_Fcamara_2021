<?php
require __DIR__ . "/../vendor/autoload.php";
session_start();

$user = new \_api\Classes\Class_Pedido();

$user->setRa($_SESSION['RaAluno']);

$MaterialDao = new \_api\Classes\DaoMaterial();
$PedidoDao = new \_api\Classes\DaoPedido();

$MaterialDao->read();
    $cont = 0;
foreach($MaterialDao->read() as $material):
    $cont++;
    $post = 'material'. $cont;
    echo $post."</br>";
    $user->setMaterial($cont);

    if($PedidoDao->read($user) == FALSE)
    {
        if(isset($_POST[$post]) && !empty($_POST[$post]))
        {
            $PedidoDao->create($user);
            if($PedidoDao->read($user) == TRUE)
            {
                header("Location: ../pedidos.php");
            }
            else
            {
                echo "Não Foi</br>";
            }   
        }
    }
    else
    {
        echo "Ja cadastrado</br>";
        header("Location: ../pedidos.php");
    }

endforeach;

?>