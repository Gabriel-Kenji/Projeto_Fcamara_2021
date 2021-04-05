<?php
require __DIR__ . "/../vendor/autoload.php";
session_start();
if(isset($_POST["pedido"]) && !empty($_POST["pedido"])):
    $_SESSION['id_pedido'] = $_POST["pedido"];
endif;
if(isset($_SESSION['id_pedido']) && !empty($_SESSION['id_pedido'])){

    $user = new \_api\Classes\Class_Pedido();
    $pedidoDao = new \_api\Classes\DaoPedido();

    $user->setPedido($_SESSION['id_pedido']);

    $pedidoDao->readPedidosModal($user);
    $cont = 0;
    foreach($pedidoDao->readPedidosModal($user) as $pedido){
        $user->setRa("2");

        if($cont <= 0){?>

            <link rel="stylesheet" href="./css/realizar-doacao.css">
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;1,300&display=swap" rel="stylesheet">
            <script src=”http://code.jquery.com/jquery-1.11.2.min.js”> </script> <script type="text/javascript"
                src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"> </script>
            <h3>Aluno:[<?php echo $pedido['cd_RA']?>]</h5>
            <div class="information">
                <p>Escola:[<?php echo $pedido['nm_escola']?>]</p>
                <p>Data da solicitação:[]</p>
            </div>
<?php   } 
            $cont++;
    }  ?>

    <h3>Lista de materiais:</h3>
    <div class="list">
        <table class="content-table">
            <thead>
                <tr>
                    <td>Item</td>
                    <td>Quantidade</td>
                </tr>
            </thead>
            <tbody>
                <?php $pedidoDao->readPedidos($user);
                        foreach($pedidoDao->readPedidosAluno($user) as $pedido){
                        ?>
                <tr>
                    <td><?php echo $pedido['nm_material']?></td>
                    <td><?php echo $pedido['ds_quantidade']?></td>
                </tr>
                <?php }?>

            </tbody>
        </table>


        <a href="http://localhost/projeto_fcamara_2021/selecao-doacao.php">confirmar doação</a>
    </div>
<?php                     
}
?>